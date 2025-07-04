const { createApp } = Vue;
const apiUrl = "http://localhost/lab11_ci_php/ci4/public"; // Biarkan tetap

createApp({
  data() {
    return {
      artikel: [],
      formData: {
        id: null,
        judul: "",
        isi: "",
        status: 0,
      },
      showForm: false,
      formTitle: "Tambah Data",
      statusOptions: [
        { text: "Draft", value: 0 },
        { text: "Publish", value: 1 },
      ],
    };
  },
  mounted() {
    this.loadData();
  },
  methods: {
    loadData() {
      axios
        .get(apiUrl + "/post")
        .then((response) => {
          this.artikel = response.data.artikel;
        })
        .catch((error) => console.error("Gagal load data:", error));
    },
    tambah() {
      this.formTitle = "Tambah Data";
      this.formData = { id: null, judul: "", isi: "", status: 0 };
      this.showForm = true;
    },
    edit(data) {
      this.formTitle = "Ubah Data";
      this.formData = { ...data };
      this.showForm = true;
    },
    hapus(index, id) {
      if (confirm("Yakin menghapus data?")) {
        axios
          .delete(apiUrl + "/post/" + id)
          .then(() => {
            this.artikel.splice(index, 1);
          })
          .catch((error) => console.error("Gagal hapus data:", error));
      }
    },
    saveData() {
      const method = this.formData.id ? "put" : "post";
      const url = this.formData.id
        ? apiUrl + "/post/" + this.formData.id
        : apiUrl + "/post";

      axios[method](url, this.formData)
        .then(() => {
          this.loadData();
          this.showForm = false;
          this.resetForm();
        })
        .catch((error) => console.error("Gagal simpan data:", error));
    },
    resetForm() {
      this.formData = { id: null, judul: "", isi: "", status: 0 };
    },
    statusText(status) {
      return status == 1 ? "Publish" : "Draft";
    },
  },
}).mount("#app");