<div class="w-full z-5">
    
    <div id="map" class="w-full h-96 rounded" wire:ignore></div>

    @push('scripts')
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>

        <script>
           document.addEventListener('DOMContentLoaded', function () {
                const lat = @json($lat); 
                const lng = @json($lng);

                const map = L.map('map').setView([lat, lng], 16); 

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                const marker = L.marker([lat, lng], { draggable: true }).addTo(map);

                marker.on('dragend', function (e) {
                    const newLatLng = e.target.getLatLng();
                    @this.set('lat', newLatLng.lat);
                    @this.set('lng', newLatLng.lng);
                });

                map.on('click', function (e) {
                    marker.setLatLng(e.latlng);
                    @this.set('lat', e.latlng.lat);
                    @this.set('lng', e.latlng.lng);
                });
            });
        </script>
    @endpush
</div>