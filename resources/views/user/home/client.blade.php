<section id="client-section">
    <div class="container py-5">
        <div class="row">
            <h4 class="fw-semibold text-center mb-5">TELAH DIPERCAYA OLEH</h4>
            <div class="col-md-12 client-logo-wrapper">
                <div class="client-track d-flex justify-content-center flex-wrap gap-4">
                    @php
                        $clients = [
                            'BadanSiber.png',
                            'KemenDesa.png',
                            'Kemnaker.png',
                            'Kemper.png',
                            'Microsoft.png',
                            'Migas.png',
                            'OJK.png',
                            'PertaminaGas.png',
                            'PKB.png',
                            'PMI.png',
                            'Puspenerbad.png'
                        ]
                    @endphp
                    @foreach(
                        array_merge($clients, $clients) as $client)
                        <img src="{{ asset('img/index/client/' . $client) }}" alt="{{ $client }}" class="img-fluid">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
