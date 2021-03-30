<template>
    <div>
        {{message}}
        <example-component></example-component>
    </div>
</template>

<script>
    
    export default {
        data: () => ({

            message: 'Test',
        })
    };

</script>