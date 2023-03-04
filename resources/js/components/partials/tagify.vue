<template v-once>
  <textarea v-if="mode === 'textarea'" v-model="value" />
  <input v-else :value="initialValue" v-on:change="onChange" class="form-control" />
</template>

<script>
import Tagify from "../../../../public/assets/js/tagify.min.js";
import "../../../../public/assets/css/tagify.css";

export default {
  name: "Tags",
  props: {
    mode: String,
    settings: Object,
    initialValue: Array,
    onChange: Function,
  },
  watch: {
    initialValue(newVal, oldVal) {
      this.tagify.loadOriginalValues(newVal);
    }
  },
  mounted() {
    this.tagify = new Tagify(this.$el, this.settings);
  }
};
</script>
