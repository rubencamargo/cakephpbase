<?php
return [
    //'inputContainer' => '<div class="form-control">{{content}}</div>',
    'input' => '<input class="form-control mb-3" type="{{type}}" name="{{name}}" data-error-message="{{customValidityMessage}}" {{attrs}}/>',
    'inputSubmit' => '<input class="btn btn-secondary" type="{{type}}"{{attrs}}/>',
    'checkbox' => '<input class="form-check-input mb-3" type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
    'select' => '<select class="form-select mb-3" name="{{name}}"{{attrs}}>{{content}}</select>',
    //'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>'
];