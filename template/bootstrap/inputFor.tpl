<div class="col-sm-10">
    {{if(isFieldRequired(_field))}}
    <div class="required">
        *
    </div>
    {{/if}}
    {{inputFor(_field,_type,"{'class':'form-control'}",_source)}}
</div>