{{-- NAVEGAÇÃO --}}
<nav aria-label="Page navigation example" style="margin-top: 50px;">
    <ul class="pagination pagination-lg justify-content-center">
        @php
            $i = 1;
        @endphp
        @foreach ($projetos as $projeto)
            @continue($loop->index%3 == 0)
            <li class="page-item"><a class="page-link" href="#">{{ $i++ }}</a></li>
        @endforeach

    </ul>
</nav>
