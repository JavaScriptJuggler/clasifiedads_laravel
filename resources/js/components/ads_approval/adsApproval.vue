<template>
  <div>
    <loading :active="isLoading" :can-cancel="true" :on-cancel="onCancel" :is-full-page="fullPage" />
    <div class="row" style="height:70vh">
      <div class="col-md-12">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Product Title</th>
                <th>Product Category</th>
                <th>Product Sub-Category</th>
                <th>Product Price</th>
                <th>Price Condition</th>
                <th>Product Condition</th>
                <th>Ads Category</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0" v-if="(adsListData.data)?.length">
              <tr :key="ad.id" v-for="ad in adsListData.data">
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i>
                  <strong>{{ad.product_name}}</strong>
                </td>
                <td>{{ad.product_category}}</td>
                <td>{{ad.product_sub_category}}</td>
                <td>{{ad.price}}</td>
                <td>{{ad.price_condition}}</td>
                <td>{{ad.product_condition}}</td>
                <td>
                  <span class="badge" :style="{'background-color':ad.ads_color}">{{ad.ad_category}}</span>
                </td>
                <td>
                  <button class="btn btn-danger btn-sm m-1" v-on:click="deleteRecord(ad.id)">
                    <i class="bx bx-trash-alt"></i>
                  </button>
                </td>
              </tr>
            </tbody>
            <tbody class="table-border-bottom-0" v-else>
              <tr>
                <td colspan="8" class="text-center">Congratualtions.. No un-approved ads found</td>
              </tr>
            </tbody>
          </table>
          <Bootstrap5Pagination
            align="center"
            :data="adsListData"
            @pagination-change-page="getUnAprovedData"
          ></Bootstrap5Pagination>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Loading from "vue-loading-overlay";
import swal from "sweetalert";
import { Bootstrap5Pagination } from "laravel-vue-pagination";
export default {
  name: "adsApproval",
  data() {
    return {
      adsListData: [],
      isLoading: false,
      fullPage: true
    };
  },
  components: {
    Loading,
    Bootstrap5Pagination
  },
  methods: {
    async getUnAprovedData(page = 1) {
      this.isLoading = true;
      await axios({
        method: "get",
        url: `/admin/ads-approve/get-all-unapproved-ads?page=${page}`,
        data: {}
      })
        .then(response => {
          this.isLoading = false;
          this.adsListData = response.data.details;
        })

        .catch(error => console.log(error));
    },
    deleteRecord(adid) {
      swal({
        title: "Are you sure?",
        text:
          "Sure to delete this ad before approving by admin ?, If deleted admin can't approve this ad any more !!!",
        icon: "warning",
        buttons: true,
        dangerMode: true
      }).then(willDelete => {
        this.isLoading = true;
        axios({
          method: "post",
          url: "/admin/ads-approve/delete-approval-request",
          data: {
            id: adid
          }
        })
          .then(response => {
            if (response.data.status) {
              this.isLoading = false;
              this.getUnAprovedData();
              setTimeout(() => {
                location.reload();
              }, 3000);
            }
          })

          .catch(error => console.log(error));
      });
    }
  },
  created() {
    this.getUnAprovedData();
  }
};
</script>
