<template>
    <div class="container-fluid p-0">
        <ul class="menu">
            <li class="menu-item print">
                <a href="#">Печать</a>
            </li>
            <li class="menu-item save">
                <a href="#">Сохранить PDF</a>
            </li>
            <li class="menu-item filter">
                <a href="#">Фильтр</a>
            </li>
        </ul>

        <form class="filter">

            <div class="form-group">
                <div class="col-left">
                    <span class="butt_filter butt_ok"></span>
                </div>
                <div class="col-center d-flex align-items-center">
                    <span class="form-name">Фильтр</span>
                </div>
                <div class="col-right">
                    <span class="butt_filter butt_cancel"></span>
                </div>
            </div>

            <div class="form-group mb12">
                <div class="col-left">
                    c
                </div>
                <div class="col-center-right">

                </div>
            </div>

            <div class="form-group">
                <div class="col-max">
                    <vue-select
                            v-model="smena"
                            :data="optionsSmenas"
                            placeholder="Смены:"
                            :multiple="true"
                    >
                        <vue-option
                                v-for="i in optionsSmenas"
                                :key="i.value"
                                :value="i.value"
                                :label="i.label"
                        >
                        </vue-option>
                    </vue-select>
                </div>
            </div>

            <!--<div class="form-group mb12">-->
            <!---->
            <!--</div>-->

            <div class="form-group">
                <div class="col-max">
                    <vue-select
                            v-model="chart"
                            :data="optionsCharts"
                            placeholder="Добавить графики:"
                            :multiple="true"
                    >
                        <vue-option
                                v-for="i in optionsCharts"
                                :key="i.value"
                                :value="i.value"
                                :label="i.label"
                        >
                        </vue-option>
                    </vue-select>
                </div>
            </div>

            <!--<div class="form-group">-->

            <!--</div>-->

        </form>
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
                optionsSmenas: [
                    {label: '1смена', value: 1},
                    {label: '2смена', value: 2},
                ],
                optionsCharts: [
                    {label: 'Производительность', value: 1},
                    {label: 'XXXXXXXXXX', value: 2},
                    {label: 'XXXXXXXXXXXXX', value: 3}
                ],
                smena: [],
                chart: [],
            }
        },
    }
</script>

<style scoped>

</style>