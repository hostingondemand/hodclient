<div class="col-xs-10">
    {{if(isFieldRequired(_field))}}
    <div class="required">
        *
    </div>
    {{/if}}
    {{inputFor(_field,_type,_attributes,_source)}}
</div>