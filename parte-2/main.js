const app = new Vue ({
  el: '.vue-coll',
  data: {
    cdArray: "",
    genere: "",
    filteredCdArray: ''
  },
  mounted: function() {
      axios
        .get('http://localhost:8080/php-ajax-dischi/parte-2/')
        .then( (result) => this.cdArray = result.data.response)
  },
  methods: {
    filter: function() {
      this.filteredCdArray = this.cdArray.filter(cd => cd.genre == this.genere)
    }
  }
});
