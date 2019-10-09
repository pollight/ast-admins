<template>
    <div class="container-fluid p-0">
        <ul class="menu">
            <li class="menu-item print">
                <a href="#">Печать</a>
            </li>
            <li class="menu-item save">
                <a href="#">Сохранить PDF</a>
            </li>
            <li class="menu-item activates" >
                <span class="click-1 noclick" @click="checkRecept()">Использовать</span>
            </li>
            <li class="menu-item delete" @click="onDeleteRecipe()">
                <span>Удалить рецепт</span>
            </li>
            <li class="menu-item add" @click="onFilter()" v-if="!isFilter">
                <span>Добавить рецепт</span>
            </li>

            <form class="filter" v-if="isFilter">

                <div class="form-group">
                    <div class="col-left">
                        <span class="butt_filter butt_ok" @click="onSubmitAddForm()"></span>
                    </div>
                    <div class="col-center d-flex align-items-center">
                        <span class="form-name" @click="onFilter()">Добавить рецепт</span>
                    </div>
                    <div class="col-right">
                        <span class="butt_filter butt_cancel" @click="onResetAddForm()"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-max">
                        <vue-input v-model="Name" placeholder="Название нового рецепта"></vue-input>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-max">
                        <vue-select
                                v-model="gost"
                                :data="optionsGosts"
                                placeholder="Гост"
                        >
                            <vue-option
                                    v-for="i in optionsGosts"
                                    :key="i.value"
                                    :value="i.value"
                                    :label="i.label"
                            >
                            </vue-option>
                        </vue-select>
                    </div>
                </div>

            </form>
        </ul>


    </div>
</template>

<script>

    import 'vfc/dist/vfc.css'
    import {
        Input,
        Button,
        Checkbox,
        CheckboxGroup,
        Radio,
        Select,
        Option,
        Form,
        FormItem,
        FormBuilder
    } from 'vfc'

    export default {
        components: {
            [Input.name]: Input,
            [Button.name]: Button,
            [Checkbox.name]: Checkbox,
            [CheckboxGroup.name]: CheckboxGroup,
            [Radio.name]: Radio,
            [Select.name]: Select,
            [Option.name]: Option,
            [Form.name]: Form,
            [FormItem.name]: FormItem,
            [FormBuilder.name]: FormBuilder,
        },
        data: function () {

            return {
                optionsGosts: [
                    {label: 'СТБ 1713-2007', value: 1},
                    {label: 'СТБ 1714-2007', value: 2}
                ],
                gost: '',
                Name: '',
                isFilter: false,
                currentID: 0,
            }
        },
        props: [
            'routes',
        ],
        methods: {
            onFilter: function () {
                if (this.isFilter)
                    this.isFilter = false;
                else
                    this.isFilter = true;
            },
            onSubmitAddForm: function () {
                let Name = this.Name;
                let gost = this.gost;
                this.isFilter = false;
                axios.post('/Addrecepts',{
                    Name: Name,
                    gost: gost,
                }).then(function (response) {
                    console.log(response.data);
                    
                });
            },
            onDeleteRecipe: function () {
                let id =$("tr.active").attr('data-id');
                alert(id);
                axios.post('/deleteRecept',{
                    id: id,
                }).then(function (response) {
                    console.log(response);
                });
            },
            onResetAddForm: function () {
                this.gost = '';
                this.isFilter = false;
                this.Name = '';
            },
            checkRecept: function(){
                     axios.post('/selectrecept',{
                    Name: nameR,
                }).then(function (response) {
                    console.log(response);
                });
            }
        }
    }
</script>

<style scoped>
span.click-1       {
  pointer-events: auto;
  color: green;
}
span.noclick       {
  pointer-events: none;
  color: grey;
}

</style>