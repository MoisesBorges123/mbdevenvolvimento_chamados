<div>

    <div class="row">
        <div class="col-lg-4">
            <livewire:payments.charts.total-despesas />
        </div>
        <div class="col-lg-4">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2 fs-18 text-muted">
                                Despesas Previstas
                            </div>
                            <h1 class="font-weight-bold mb-1">30,175</h1>
                            <span class="text-success"><i class="fa fa-arrow-up mr-1"></i> +1.8%</span>
                        </div>
                        <div class="col col-auto">
                            <div class="mx-auto chart-circle chart-circle-md chart-circle-success mt-sm-0 mb-0" data-value="0.60" data-thickness="12" data-color="#2dce89"><canvas width="96" height="96"></canvas>
                                <div class="mx-auto chart-circle-value text-center fs-20">60%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2 fs-18 text-muted">
                                Despesas Surpresa
                            </div>
                            <h1 class="font-weight-bold mb-1">7,745</h1>
                            <span class="text-danger"><i class="fa fa-arrow-down mr-1"></i> -2.4%</span>
                        </div>
                        <div class="col col-auto">
                            <div class="mx-auto chart-circle chart-circle-md chart-circle-secondary mt-sm-0 mb-0" data-value="0.45" data-thickness="12" data-color="#f7346b"><canvas width="96" height="96"></canvas>
                                <div class="mx-auto chart-circle-value text-center fs-20">25%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:payments.lista-despesas>
</div>
