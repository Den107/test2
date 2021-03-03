let slider = tns({
  container: '.my-slider',
  items: 3,
  responsive: {
    318: {
      items: 1
    },
    612: {
      items: 2
    },
    1200: {
      items: 3
    }
  }
});