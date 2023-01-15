const ctx5 = document.getElementById('j_doughnut');
new Chart(ctx5, {
  type: 'doughnut',
  data: {
    labels: ['D3','Stat','KS '],
    datasets: [{
      label: '# of Votes',
      data: [mahasiswaj.jurusand3,mahasiswaj.jurusand4,mahasiswaj.jurusand4ks],
      borderWidth: 1
    }]
  },
});