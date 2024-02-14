<template>
    <section class="conf-step">
        <header class="conf-step__header conf-step__header_opened">
            <h2 class="conf-step__title">Конфигурация залов</h2>
        </header>
        <div class="conf-step__wrapper">

            <p class="conf-step__paragraph">Выберите зал для конфигурации:</p>
            <ul class="conf-step__selectors-box">
                <template v-for="(item, index) in halls" :key="item.id">
                    <li>
                        <input type="radio"
                               class="conf-step__radio"
                               name="price_tab"
                               :value="item.id"
                               :checked="index===0 ? true: false"
                               @click="getActiveHall(item.id)">
                        <span class="conf-step__selector">{{ item.name }}</span>
                    </li>
                </template>
            </ul>

            <p class="conf-step__paragraph">Укажите количество рядов и максимальное количество кресел в ряду:</p>

            <form @submit.prevent="resizeHall(hall.id)">
                <div class="conf-step__legend">
                    <label class="conf-step__label">Рядов, шт
                        <input type="text"
                               class="conf-step__input"
                               placeholder="3"
                               v-model.number="hall.row"></label>
                    <span class="multiplier">x</span>
                    <label class="conf-step__label">Мест, шт
                        <input type="text"
                               class="conf-step__input"
                               placeholder="3"
                               v-model.number="hall.col"></label>
                </div>

                <fieldset class="conf-step__buttons text-left">
                    <input
                        type="submit"
                        class="conf-step__button conf-step__button-accent">
                </fieldset>
            </form>

            <p class="conf-step__paragraph">Теперь вы можете указать типы кресел на схеме зала:</p>
            <div class="conf-step__legend">
                <span class="conf-step__chair conf-step__chair_standart"></span> — обычные кресла
                <span class="conf-step__chair conf-step__chair_vip"></span> — VIP кресла
                <span class="conf-step__chair conf-step__chair_disabled"></span> — заблокированные (нет кресла)
                <p class="conf-step__hint">Чтобы изменить вид кресла, нажмите по нему левой кнопкой мыши</p>
            </div>

            <div class="conf-step__hall">
                <div class="conf-step__hall-wrapper">
                    <div class="conf-step__row">
                        <!--<template v-for="(item, index) in hall.seats.seats" :key="index">
                            <li>
                                <span class="conf-step__chair conf-step__chair_vip"></span>
                            </li>
                        </template>-->
                    </div>
                </div>

                <fieldset class="conf-step__buttons text-center">
                    <button class="conf-step__button conf-step__button-regular">Отмена</button>
                    <input type="submit" value="Сохранить" class="conf-step__button conf-step__button-accent">
                </fieldset>

            </div>
        </div>
    </section>
</template>

<script setup>
import useHalls from '@/composables/halls'
import {useHallStore} from '/resources/js/store/hall'
import {onMounted} from "vue";


const {halls, hall,activeHall} = useHallStore()
const {getHall, updateHall, getHalls} = useHalls()

onMounted(async (activeHall) => {
    //await getActiveHall(activeHall)
})

const getActiveHall = async (id) => {
    await getHall(id)
}
const resizeHall = async (id) => {
    if (!window.confirm('Внимание, при изменении размера зала - статусы мест сбросятся. Продолжить?')) {
        return
    }
    await updateHall(id, {...hall.value})
    await getHall(id)
}
</script>