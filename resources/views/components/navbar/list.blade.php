<li class=" hover:text-primary" :class="(section.includes('{{ $link }}')||'{{ $link }}'=='#')?'text-primary':''">
    <a href="{{ $link }}" @click="fn('{{ $link }}')">{{ $text }}</a>
</li>
