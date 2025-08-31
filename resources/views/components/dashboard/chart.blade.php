@props([
  'id' => 'chart',
  'type' => 'bar',
  'labels' => [],
  'chartValues' => []
])

<canvas id="{{ $id }}" class="w-full"></canvas>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Chart(document.getElementById('{{ $id }}'), {
            type: '{{ $type }}',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'Dataset',
                    data: @json($chartValues),
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 206, 86, 0.6)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // respeita altura do container
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            },
        });
        
    });
</script>
