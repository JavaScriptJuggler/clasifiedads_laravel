<template>
  <div>
    <loading :active="isLoading" :can-cancel="true" :on-cancel="onCancel" :is-full-page="fullPage" />
    <div class="row">
      <div class="col-md-12 mb-3">
        <select name="user_type" id="user_type" style="float:right" class="form-control w-25">
          <option value style="display:none">Select User Type</option>
          <option value="free">Free</option>
          <option value="paid">Paid</option>
        </select>
      </div>
      <div class="col-md-4 mb-3" v-for="user in userList.data" :key="user.id">
        <div class="card" style="border-radius: 15px; overflow:auto">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img
                  :src="user.avatar!=null && user.avatar!=''?'/document_bucket/'+user.avatar:'/assets/img/avatars/notfoundimag.jpg'"
                  alt="avatar"
                  class="img-fluid"
                  style="width: 150px; border-radius: 10px;height:150px"
                />
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">
                  {{user.name}}
                  <span
                    v-if="user.user_type == 'admin'"
                    style="font-size:10px;float:right"
                    class="badge bg-label-danger"
                  >Admin</span>
                  <span
                    v-else
                    style="font-size:10px;float:right"
                    class="badge bg-label-primary"
                  >User</span>
                </h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">{{user.email}}</p>
                <div
                  class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;"
                >
                  <div>
                    <p class="small text-muted mb-1">Ads</p>
                    <p class="mb-0">41</p>
                  </div>
                  <div class="px-3">
                    <p class="small text-muted mb-1">Plan</p>
                    <p class="mb-0">Free</p>
                  </div>
                  <div>
                    <p class="small text-muted mb-1">City</p>
                    <p class="mb-0">{{user.city}}</p>
                  </div>
                </div>
                <div class="d-flex pt-1">
                  <a
                    type="button"
                    class="btn btn-primary me-1 flex-grow-1"
                    :href="'users/show-user-details/'+user.id"
                  >View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Bootstrap5Pagination align="center" :data="userList" @pagination-change-page="list"></Bootstrap5Pagination>
  </div>
</template>
<script>
import Loading from "vue-loading-overlay";
import swal from "sweetalert";
import { Bootstrap5Pagination } from "laravel-vue-pagination";
export default {
  name: "Users",
  data() {
    return {
      isLoading: false,
      fullPage: true,
      userList: [],
      user_condition: "all"
    };
  },
  components: {
    Loading,
    Bootstrap5Pagination
  },
  created() {
    this.list();
  },
  methods: {
    async list(page = 1) {
      let data = {
        condition: this.user_condition
      };
      await axios
        .get(
          `/admin/users/get-all-users?page=${page}&data=${JSON.stringify(data)}`
        )
        .then(response => {
          this.userList = response.data.data;
        })
        .catch(({ response }) => {
          console.error(response);
        });
    }
  }
};
</script>
