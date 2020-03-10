<template>

</template>

<script>
// export default {
//   data() {
//     return {
//       fruits: []
//     };
//   },

//   mounted() {
//     //var point;
//     var url = "/ajax/fruit";
//     console.log("read this??");
//     axios.get(url).then(function(response) {
//       this.fruit = response.data;
//       console.log("Fruit, baby!!!");
//     });
//   }
// };

// new Vue({
//   // el: ‘#app’,
//   data: {
//     fruits: {}
//   },
//   mounted() {
//           var fruits;
//     console.log("-----");
//     var url = "/ajax/fruit";
//     console.log("aaa-----");

//     console.log("read-----");
//     axios.get(url).then(function(response) {
//       console.log("Fruits-----");
//       this.fruits = response.data;
//     });
//   }
// });

// export default {
//   // el: ‘#app’,
//   data() {
//     return {
//       name: ""
//     };
//   },
//   mounted() {
//     console.log("-----");
//     var url = "/ajax/fruit";
//     console.log("aaa-----");
//     console.log("read-----");
//     console.log(url);
//     axios.get(url).then(function(response) {
//       var a = response.data;
//       console.log("Fruits-----");
//       //this.fruits = response.data;
//     });
//   }
// };

new Vue({
  el: "#app",
  //   data() {
  //     return {
  //       name: ""
  //     };
  //   },
  data: {
    fruits: {}
  },
  mounted() {
    console.log("-----");
    var url = '/ajax/fruit';
       var a = this;
    axios.get(url)
    .then(function(response) 
    {
      a.fruits = response.data;
      console.log(a.fruits);
      //this.fruits = response.data;
    });
  }
});
</script>
