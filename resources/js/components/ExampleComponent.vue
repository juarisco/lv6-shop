<template>
    <div class="container">
        <legend>Crear Categoría</legend>
        <form>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" v-model="nombre" class="form-control" name="nombre" id="name">
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" v-model="generateSlug" class="form-control" name="slug" id="slug">
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" cols="30" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary float-right">Guardar</button>
        </form>

        <br>
        <p>Nombre</p>
        {{ nombre }}
        <br>
        <p>Slug-Slug</p>
        {{ generateSlug }}
    </div>
</template>

<script>
    export default {
        data() {
            return {
                nombre: '',
            }
        },
        computed: {
            generateSlug() {
                return Slug(this.nombre, {lower: true})
                // return Slug('I ♥ unicode', {lower: true})

            }
        }
    }
</script>
