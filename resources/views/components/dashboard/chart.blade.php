<canvas id="{{ $id }}" class="w-full h-96"></canvas>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('{{ $id }}').getContext('2d');

        // console.log(@json($labels));
        // console.log(@json($datasets));

        new Chart(ctx, {
            type: '{{ $type }}',
            data: {
                labels: @json($labels),
                datasets: @json($datasets)
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: { beginAtZero: false }
                }
            },
        });
    });
</script>