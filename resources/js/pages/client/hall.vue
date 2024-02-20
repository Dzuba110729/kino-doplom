<template>
    <header class="page-header">
        <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    </header>

    <main>
        <section class="buying">
            <div class="buying__info">
                <div class="buying__info-description">
                    <h2 class="buying__info-title">{{ session.film }}</h2>
                    <p class="buying__info-start">Начало сеанса: {{ session.datetime }}</p>
                    <p class="buying__info-hall">{{ session.hall }}</p>
                </div>
                <div class="buying__info-hint">
                    <p>Тапните дважды,<br>чтобы увеличить</p>
                </div>
            </div>
            <div class="buying-scheme">

                <template v-for="item in places">

                </template>

                <div class="buying-scheme__wrapper">
                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_taken"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_vip"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_vip"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_vip"></span><span
                        class="buying-scheme__chair buying-scheme__chair_vip"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_vip"></span><span
                        class="buying-scheme__chair buying-scheme__chair_vip"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_vip"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_taken"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_vip"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_taken"></span><span
                        class="buying-scheme__chair buying-scheme__chair_vip"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_selected"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_selected"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_disabled"></span><span
                        class="buying-scheme__chair buying-scheme__chair_disabled"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                    </div>

                    <div class="buying-scheme__row">
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_taken"></span><span
                        class="buying-scheme__chair buying-scheme__chair_taken"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                        <span class="buying-scheme__chair buying-scheme__chair_standart"></span><span
                        class="buying-scheme__chair buying-scheme__chair_standart"></span>
                    </div>
                </div>
                <div class="buying-scheme__legend">
                    <div class="col">
                        <p class="buying-scheme__legend-price"><span
                            class="buying-scheme__chair buying-scheme__chair_standart"></span> Свободно (<span
                            class="buying-scheme__legend-value">250</span>руб)</p>
                        <p class="buying-scheme__legend-price"><span
                            class="buying-scheme__chair buying-scheme__chair_vip"></span> Свободно VIP (<span
                            class="buying-scheme__legend-value">350</span>руб)</p>
                    </div>
                    <div class="col">
                        <p class="buying-scheme__legend-price"><span
                            class="buying-scheme__chair buying-scheme__chair_taken"></span> Занято</p>
                        <p class="buying-scheme__legend-price"><span
                            class="buying-scheme__chair buying-scheme__chair_selected"></span> Выбрано</p>
                    </div>
                </div>
            </div>
            <button class="acceptin-button" onclick="location.href='payment.html'">Забронировать</button>
        </section>
    </main>
</template>

<script setup>
import usePlaces from '@/composables/places'
import useSessions from '@/composables/sessions'

import {onMounted, ref} from "vue";

const props = defineProps({
    id: {required: true}
})

const {getPlaces, updatePlace, places} = usePlaces()
const {session, getSession} = useSessions()

onMounted(async () => {
    await getSession(props.id)
    await getPlaces(16)
})
</script>


