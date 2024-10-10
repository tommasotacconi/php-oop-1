const { createApp } = Vue

createApp({
  data() {
    return {
      filmList: data,
    }
  },
  created () {
    console.log(data);
  }
}).mount('#app')