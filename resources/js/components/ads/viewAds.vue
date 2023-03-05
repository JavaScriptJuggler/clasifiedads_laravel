<template>
  <div class="container">
    <loading :active="isLoading" :can-cancel="true" :is-full-page="fullPage" />
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img
          :src="!typeof productDetails.cover_image === 'undefined' || productDetails.cover_image!=''? '/document_bucket/'+productDetails.cover_image:'/assets/img/avatars/notfoundimag.jpg'"
          alt="user-avatar"
          class="d-block rounded"
          height="200"
          width="200"
          id="coverImage"
        />
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Change Cover Photo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input
              type="file"
              id="upload"
              class="account-file-input"
              hidden
              accept="image/png, image/jpeg"
              v-on:change="changeCoverImage($event)"
            />
          </label>
          <p class="text-muted mb-0">Allowed JPG, JOEG or PNG. Max size of 2M</p>
        </div>
      </div>
    </div>
    <div class="row p-1">
      <div class="col-md-4 mb-1">
        <label for class="form-label">
          Product Name
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <input type="text" class="form-control" v-model="productDetails.product_name" />
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Product Category
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          name
          id="product_category"
          class="form-control"
          v-model="productDetails.product_category"
          v-on:change="changeCategory($event)"
        >
          <option value style="display:none">Select Category</option>
          <option
            v-for="category in categories"
            :data-id="category.id"
            :key="category.id"
          >{{ category.category_name }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Product Sub-Category
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          name
          id="product_sub_category"
          class="form-control"
          v-model="productDetails.product_sub_category"
          v-on:click="getIdsOfSelected($event)"
        >
          <option value style="display:none">Select Sub-Category</option>
          <option
            v-for="subcategory in filterSubcategories"
            :key="subcategory.id"
            :data-id="subcategory.id"
          >{{ subcategory.sub_category_name }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-1">
        <label for class="form-label">
          Product Price
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <input
          type="text"
          v-model="productDetails.price"
          class="form-control"
          placeholder="Product Price"
        />
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Price Condition
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          name
          id="product_price_condition"
          v-model="productDetails.price_condition"
          v-on:click="getIdsOfSelected($event)"
          class="form-control"
        >
          <option value style="display:none">Select Price Condition</option>
          <option
            v-for="pricecondition in priceconditions"
            :key="pricecondition.id"
            :data-id="pricecondition.id"
          >{{ pricecondition.condition_name }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Product Condition
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          name
          id="product_condition"
          v-model.trim="productDetails.product_condition"
          class="form-control"
        >
          <option value style="display:none">Select Product Condition</option>
          <option
            v-for="product_condition in product_conditions"
            :key="product_condition.id"
          >{{ product_condition }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Ads Type
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          name
          id="ads_category"
          class="form-control"
          v-model="productDetails.ad_category"
          v-on:click="getIdsOfSelected($event)"
        >
          <option value style="display:none">Select Ads Category</option>
          <option
            v-for="adscategory in adscategories"
            :key="adscategory.id"
            :data-id="adscategory.id"
          >{{ adscategory.ad_category_name }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Date Of Published
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <input
          type="date"
          v-model="productDetails.date"
          id="publish_date"
          readonly
          class="form-control"
        />
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Seller Type
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select name id="seller_type" v-model="productDetails.seller_type" class="form-control">
          <option value style="display:none">Select Seller Type</option>
          <option v-for="seller_type in seller_types" :key="seller_type">{{ seller_type }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Location
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <input type="text" v-model="productDetails.location" id="location" class="form-control" />
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          City
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          name
          id="city"
          v-model="productDetails.city_name"
          class="form-control"
          v-on:click="getIdsOfSelected($event)"
        >
          <option value style="display:none">Select City</option>
          <option v-for="city in cities" :data-id="city.id" :key="city.id">{{ city.city_name }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Unites
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select name id="unit" v-model="productDetails.units" class="form-control">
          <option value style="display:none">Select Unit</option>
          <option v-for="unit in unites" :key="unit">{{ unit }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Payment Types
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select
          multiple
          name
          id="payment_method"
          v-model="selected_payment_methods"
          class="form-control"
        >
          <option value style="display:none">Payment Method</option>
          <option v-for="payment in payment_methods" :key="payment">{{ payment }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Service Area
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <select name id="service_area" v-model="productDetails.service_area" class="form-control">
          <option value style="display:none">Service Area</option>
          <option v-for="service_area in service_areas" :key="service_area">{{ service_area }}</option>
        </select>
      </div>
      <div class="col-md-4 mb-2">
        <label for class="form-label">
          Tags
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <tagify :initialValue="tagifyValue" :onChange="onTagsChange" />
      </div>
      <div class="col-md-12 mb-2">
        <label for class="form-label">
          Product Description
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <textarea
          name
          id="description"
          cols="30"
          rows="10"
          class="form-control"
          placeholder="Enter Product Description..."
          v-model="productDetails.product_description"
        ></textarea>
      </div>
      <!-- <div class="col-md-12 mb-2">
        <label for class="form-label">
          Product Images
          <span class="text-danger" style="font-size:15px">*</span>
        </label>
        <vue-multi-image-upload
          @data-image="images"
          :max="5"
          :data-reset="component"
          :options="options"
          :image-size="imageSize"
          :image-format="formatType"
        />
      </div>-->
      <div
        :class="showAlert.alertStyle==true?'alert-success':'alert-danger'"
        class="alert"
        role="alert"
        v-if="showAlert.status"
      >
        <ul>
          <li v-for="(error,key) in showAlert.message" :key="error">
            <span>{{ key }}</span> :
            <span>{{ error[0] }}</span>
          </li>
        </ul>
      </div>
      <div class="col-md-12 text-center">
        <button class="btn btn-primary m-2" v-on:click="SaveChanges()">Save Changes</button>
      </div>
    </div>
  </div>
</template>
<script>
import Loading from "vue-loading-overlay";
import { VueMultiImageUpload } from "@zakerxa/vue-multiple-image-upload";
import swal from "sweetalert";
export default {
  name: "viewAds",
  data() {
    return {
      isLoading: false,
      showAlert: {
        status: false,
        message: "",
        alertStyle: false
      },
      fullPage: true,
      productDetails: {},
      categories: [],
      subcategories: [],
      priceconditions: [],
      adscategories: [],
      product_conditions: ["New", "Used"],
      cities: [],
      tagifyValue: [],
      selected_payment_methods: [],
      service_areas: [
        "All India",
        "State",
        "City",
        "Not Deliverable",
        "Walk In"
      ],
      seller_types: [
        "Personal",
        "Importer",
        "Exporter",
        "Manufacturer",
        "Distributor",
        "Wholesaler",
        "Dealer",
        "Retailer",
        "Consultant",
        "Repair & Maintenance",
        "Service Provider",
        "Developer",
        "Contractor",
        "Supplier"
      ],
      unites: [
        "On Call",
        "One Time",
        "Per Unit",
        "Per Piece",
        "Per Box",
        "Per Bottle",
        "Per Gram",
        "Per Kilogram",
        "Per Pound",
        "Per Liter",
        "Per Meter",
        "Per Centimeter",
        "Per Foot",
        "Per Inch",
        "Per Ton",
        "Per Gallon",
        "Per Hour",
        "Per Day",
        "Per Week",
        "Per Month",
        "Per Year",
        "Per Visit"
      ],
      payment_methods: [
        "UPI",
        "Credit/Debit Cards",
        "Cash",
        "COD",
        "Electronic Bank Transfers",
        "Digital/Mobile Wallet"
      ],
      productId: "",
      component: {},
      options: {},
      imageSize: 2000000, // 2MB
      formatType: ["image/jpeg", "image/png", "image/jpg"]
    };
  },
  computed: {
    filterSubcategories: function() {
      return this.subcategories.filter(
        i => i.category_name == this.productDetails.product_category
      );
    }
  },
  components: {
    Loading,
    VueMultiImageUpload
  },
  created() {
    var id = window.location.href.split("/").pop();
    this.getAdsDetails(id);
  },
  mounted() {
    // Options for image selector
    this.options.max = "Max";
    this.options.ready = "Ready";
    this.options.select = "Choosed";
  },
  methods: {
    onTagsChange(e) {
      this.productDetails.tags = e.target.value;
    },

    images(e) {
      let images = [];
      e.map(res => images.push(res));
      console.log(images);
    },

    SaveChanges() {
      this.isLoading = true;
      var form_data = new FormData();

      for (var key in this.productDetails) {
        if (key != "payment_mode")
          form_data.append(key, this.productDetails[key]);
        else form_data.append(key, this.selected_payment_methods);
      }
      if (document.querySelector("#upload").value != "") {
        form_data.set(
          "cover_image",
          document.querySelector("#upload").files[0]
        );
      }
      axios({
        method: "post",
        url: "/admin/update-ads",
        headers: { "Content-Type": "multipart/form-data" },
        data: form_data
      })
        .then(response => {
          this.isLoading = false;
          this.showAlert.status = true;
          this.showAlert.alertStyle = response.data.status;
          this.showAlert.message = response.data.message;
        })

        .catch(error => console.log(error));
    },

    changeCoverImage(event) {
      const imageFiles = event.target.files;
      const imageFilesLength = imageFiles.length;
      if (imageFilesLength > 0) {
        document.querySelector("#coverImage").src = URL.createObjectURL(
          imageFiles[0]
        );
        // this.productDetails.cover_image = imageFiles[0];
      }
    },

    getAdsDetails(id) {
      this.isLoading = true;
      let data = {
        recordid: id
      };
      axios
        .post("/admin/get-ads-details", data)
        .then(response => {
          this.isLoading = false;
          if (response.data.status) {
            this.productDetails = response.data.ads_details;
            this.categories = response.data.categories;
            this.subcategories = response.data.sub_categories;
            this.priceconditions = response.data.price_conditions;
            this.adscategories = response.data.ads_category;
            this.cities = response.data.cities;
            this.tagifyValue = response.data.ads_details.tags.split(",");
            this.selected_payment_methods = this.productDetails.payment_mode.split(
              ","
            );
          }
        })
        .catch(error => {});
    },

    getIdsOfSelectedOptions(event) {
      if (event.target.options.selectedIndex > -1) {
        return event.target.options[event.target.options.selectedIndex].dataset
          .id;
      }
    },

    getIdsOfSelected(event) {
      if (event.target.id == "product_sub_category") {
        this.productDetails.product_subcategory_id = this.getIdsOfSelectedOptions(
          event
        );
      }
      if (event.target.id == "product_price_condition") {
        this.productDetails.price_condition_id = this.getIdsOfSelectedOptions(
          event
        );
      }
      if (event.target.id == "ads_category") {
        this.productDetails.ad_category_id = this.getIdsOfSelectedOptions(
          event
        );
      }
      if (event.target.id == "city") {
        this.productDetails.city_id = this.getIdsOfSelectedOptions(event);
      }
      if (event.target.id == "city") {
        this.productDetails.city_id = this.getIdsOfSelectedOptions(event);
      }
    },

    changeCategory(event) {
      this.productDetails.product_sub_category = "";
      this.productDetails.product_category_id = this.getIdsOfSelectedOptions(
        event
      );
    }
  }
};
</script>
