<template>
  <div>
    <loading :active="isLoading" :can-cancel="true" :on-cancel="onCancel" :is-full-page="fullPage" />
    <div class="row mb-4">
      <div class="form-group text-center col-md-2">
        <label for="productSearch" class="form-label">Product</label>
        <input
          type="text"
          id="productName"
          v-model="product"
          class="form-control"
          v-on:keyup="getSearchResult()"
        />
      </div>
      <div class="form-group text-center col-md-2">
        <label for="productCategorySearch" class="form-label">Category</label>
        <select
          name="productCategorySearch"
          id="productCategorySearch"
          v-model="category"
          class="form-control"
          v-on:change="getSearchResult()"
        >
          <option value style="display:none">Search By Product Category</option>
          <option
            :key="category.id"
            v-for="category in gettingDataOnLoad.categories"
          >{{ category.category_name }}</option>
        </select>
      </div>
      <div class="form-group text-center col-md-2">
        <label for="productCategorySearch" class="form-label">Ads Category</label>
        <select
          name="productCategorySearch"
          id="productCategorySearch"
          v-model="adsCategory"
          class="form-control"
          v-on:change="getSearchResult()"
        >
          <option value style="display:none">Search By Ads Category</option>
          <option
            :key="adsCategory.id"
            v-for="adsCategory in gettingDataOnLoad.adsCategories"
          >{{ adsCategory.ad_category_name }}</option>
        </select>
      </div>
      <div class="form-group text-center col-md-2">
        <label for="productPriceSearch" class="form-label">Price</label>
        <input
          type="text"
          id="productPriceSearch"
          name="productPriceSearch"
          placeholder="Product Price"
          class="form-control"
          v-model="price"
          v-on:keyup="getSearchResult()"
        />
      </div>
      <div class="form-group text-center col-md-2">
        <label for="productSearch" class="form-label">Product Condition</label>
        <select
          name="productConditionSearch"
          id="productConditionSearch"
          class="form-control"
          v-model="condition"
          v-on:change="getSearchResult()"
        >
          <option value style="display:none">Search By Condition</option>
          <option value="New">New</option>
          <option value="Used">Used</option>
        </select>
      </div>
      <div class="form-group text-center col-md-2">
        <label for="productDateSearch" class="form-label">Date</label>
        <input
          type="date"
          id="productDateSearch"
          name="productDateSearch"
          placeholder="Search By Date"
          class="form-control"
          v-model="date"
          v-on:keyup="getSearchResult()"
          v-on:change="getSearchResult()"
        />
      </div>
    </div>
    <div class="row" style="height:70vh">
      <div class="col-md-12">
        <div class="table-responsive text-nowrap">
          <table class="table">
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
            <tbody class="table-border-bottom-0" v-if="(gettingDataOnLoad.adsListData.data)?.length">
              <tr :key="ad.id" v-for="ad in gettingDataOnLoad.adsListData.data">
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
                  <a class="btn btn-warning btn-sm m-1" :href="'/admin/view-ads/'+ad.id">
                    <i class="bx bx-edit-alt"></i>
                  </a>
                  <button class="btn btn-danger btn-sm m-1" v-on:click="deleteAd(ad.id)">
                    <i class="bx bx-trash-alt"></i>
                  </button>
                  <a class="btn btn-primary btn-sm m-1" :href="'/admin/view-ads/'+ad.id">
                    <i class="bx bx-show"></i>
                  </a>
                </td>
              </tr>
            </tbody>
            <tbody class="table-border-bottom-0" v-else>
              <tr>
                <td colspan="8" class="text-center">Ads will be appeare here after approving by admin</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <Bootstrap5Pagination
      align="center"
      :data="gettingDataOnLoad.adsListData"
      @pagination-change-page="list"
    ></Bootstrap5Pagination>
  </div>
</template>
<script>
import Loading from "vue-loading-overlay";
import swal from "sweetalert";
import { Bootstrap5Pagination } from "laravel-vue-pagination";
export default {
  name: "adsList",
  data() {
    return {
      gettingDataOnLoad: {
        adsListData: [],
        categories: [],
        subCategories: [],
        productConditions: [],
        adsCategories: []
      },
      product: "",
      category: "",
      adsCategory: "",
      price: "",
      condition: "",
      date: "",
      isLoading: false,
      fullPage: true
    };
  },
  components: {
    Loading,
    Bootstrap5Pagination
  },
  created() {
    this.list();
  },
  mounted() {},
  methods: {
    deleteAd(ad_id) {
      swal({
        title: "Are you sure?",
        text: "Once deleted, you can be recover this record again !",
        icon: "warning",
        buttons: true,
        dangerMode: true
      }).then(willDelete => {
        if (willDelete) {
          this.isLoading = true;
          let data = {
            recordId: ad_id
          };
          axios
            .post("/admin/delete-ads", data)
            .then(response => {
              if (response.data.status) {
                this.gettingDataOnLoad.adsListData = response.data.details;
                this.isLoading = false;
              }
            })
            .catch(error => {});
        }
      });
    },

    async list(page = 1) {
      let data = {
        product_name: this.product,
        product_category: this.category,
        ad_category: this.adsCategory,
        price: this.price,
        product_condition: this.condition,
        date: this.date
      };
      await axios
        .get(`/admin/get-ads?page=${page}&data=${JSON.stringify(data)}`)
        .then(response => {
          this.gettingDataOnLoad.adsListData = response.data.details;
          this.gettingDataOnLoad.categories = response.data.product_category;
          this.gettingDataOnLoad.subCategories =
            response.data.product_sub_category;
          this.gettingDataOnLoad.productConditions =
            response.data.price_conditions;
          this.gettingDataOnLoad.adsCategories = response.data.ads_category;
          this.isLoading = false;
        })
        .catch(({ response }) => {
          console.error(response);
        });
    },

    getSearchResult() {
      this.isLoading = true;
      let data = {
        product_name: this.product,
        product_category: this.category,
        ad_category: this.adsCategory,
        price: this.price,
        product_condition: this.condition,
        date: this.date
      };
      axios
        .post("/admin/get-search-results", data)
        .then(response => {
          if (response.data.status) {
            this.gettingDataOnLoad.adsListData = response.data.details;
            this.isLoading = false;
          }
        })
        .catch(error => {});
    }
  }
};
</script>
