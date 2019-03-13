<template>
    <select class="form-control" :name="name">
        <slot></slot>
    </select>
</template>

<script>
    import Select2 from 'select2'
    export default {
        props: [ 'value', 'name'],
        mounted: function () {
            var vm = this
            $(this.$el)
            // init select2
            .select2({ theme: "bootstrap" })
            .val(this.value)
            .trigger('change')
            // emit event on change.
            .on('change', function () {
                vm.$emit('input', this.value)
            })
        },
        watch: {
            value: function (value) {
            // update value
            $(this.$el)
                .val(value)
                .trigger('change')
            }
        },
        destroyed: function () {
            $(this.$el).off().select2('destroy')
        }
    }
</script>
