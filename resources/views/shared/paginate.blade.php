    <div class="col-sm-12 col-md-12">
        <div class="dataTables_paginate paging_simple_numbers row" style="float:right">
            @if(isset($itens))
            <ul class="pagination">
                @if($itens->currentPage()>1)
                <li class="paginate_button page-item previous"><a class="page-link" href="javascript:void(0);" onclick="paginate( '{{ $form }}', 1)" rel="prev">&lt;
                    &lt;
                </a></li>
                <li class="paginate_button page-item next"><a class="page-link" href="javascript:void(0);" onclick="paginate( '{{ $form }}', {{ ($itens->currentPage()-1) }} )" rel="prev">&lt;
                </a></li>
                @endif
                <li class="disabled"><a class="page-link" href="javascript:void(0);">Página {{ $itens->currentPage() }} de {{ $itens->lastPage() }}</a></li>
                @if($itens->currentPage()<$itens->lastPage())
                <li><a class="page-link" href="javascript:void(0);" onclick="paginate( '{{ $form }}', {{ ($itens->currentPage()+1) }} )" rel="next">&gt;
                </a></li>
                <li><a class="page-link" href="javascript:void(0);" onclick="paginate( '{{ $form }}', {{ $itens->lastPage() }})" rel="next">&gt;
                    &gt;
                </a></li>
                @endif
            </ul>
            <ul class="pagination">
                <li class="disabled"><a class="page-link" href="javascript:void(0);">Total de Registros: {{$itens->total()}}</a></li>
            </ul>

            @else

            <ul class="pagination">
                <li class="paginate_button page-item previous"><a class="page-link" href="javascript:void(0);" onclick="paginate( '1', 1)" rel="prev">&lt;
                    &lt;
                </a></li>
                <li class="paginate_button page-item next"><a class="page-link" href="javascript:void(0);" onclick="paginate( '1', 1 )" rel="prev">&lt;
                </a></li>
                <li class="disabled"><a class="page-link" href="javascript:void(0);">Página 1 de 1</a></li>
                <li><a class="page-link" href="javascript:void(0);" onclick="paginate( '1', 1 )" rel="next">&gt;
                </a></li>
                <li><a class="page-link" href="javascript:void(0);" onclick="paginate( '1', 1)" rel="next">&gt;
                    &gt;
                </a></li>
            </ul>
            <ul class="pagination" style="float:right">
                <li class="disabled"><a class="page-link" href="javascript:void(0);">Total de Registros: 1</a></li>
            </ul>

            @endif
            
        </div>
    </div>

    