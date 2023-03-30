<?php
// Paginator template
return [
    'first' => '<a href="{{url}}" class="page-link">{{text}}</a>',
    'number' => '<a href="{{url}}" class="page-link">{{text}}</a>',
    'current' => '<a href="{{url}}" class="page-link active">{{text}}</a>',
    'last' => '<a href="{{url}}" class="page-link">{{text}}</a>',
    'nextDisabled' => '<a href="{{url}}" class="page-link disabled">{{text}}</a>',
    'nextActive' => '<a href="{{url}}" class="page-link">{{text}}</a>',
    'prevDisabled' => '<a href="{{url}}" class="page-link disabled">{{text}}</a>',
    'prevActive' => '<a href="{{url}}" class="page-link">{{text}}</a>',
];