<template>
    <header class="page-header">
        <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    </header>

    <nav class="page-nav">
        <label class="conf-step__label conf-step__label-fullsize" style="margin-top:20px;color:black">
            Дата сеансов:
            <input
                type="date"
                class="conf-step__input"
                v-model="filterDate"
                @change="filterSessions"
            />
        </label>
    </nav>

    <main>
        <template v-for="item in sessions">

            <section class="movie">
                <div class="movie__info" style="margin-bottom:30px">
                    <div class="movie__description" style="">
                        <h2 class="movie__title">{{ item.film }}</h2>
                        <p class="movie__synopsis">{{ item.data[0].description }}</p>
                        <p class="movie__data">
                            <span class="movie__data-duration">{{ item.data[0].duration }}</span>
                            <span class="movie__data-origin">{{ item.data[0].country }}</span>
                        </p>
                    </div>
                </div>

                <div class="movie-seances__hall">
                    <h3 class="movie-seances__hall-title">Зал 1</h3>
                    <ul class="movie-seances__list">
                        <li class="movie-seances__time-block">
                            <router-link :to="{ name: 'client.hall', params: { id: 2} }"
                                         class="movie-seances__time">
                                10:20
                            </router-link>
                        </li>
                    </ul>
                </div>

            </section>
        </template>

    </main>
</template>

<script setup>
import {onMounted, ref} from "vue";
import useSessions from "../../composables/sessions.js";

const {sessions, getFilteredSessions} = useSessions()

const filterDate = ref(new Date().toISOString().slice(0, 10))
const filterHall = ref()

const filterSessions = async () => {
    await getFilteredSessions(filterDate.value, 'client')
}

onMounted(async () => {
    await filterSessions()
})

const getWeekDay = (date) => {
    let days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ']
    return days[date.getDay()]
}

/*const getWeek = () => {
  const options = {month: 'long', day: 'numeric'}
   const date = new Date(Date.now())
   console.log(date)
   let dates = []

   Date.prototype.addDays = function (days) {
       var date = new Date(this.valueOf())
       date.setDate(date.getDate() + days)
       return date
   };

   for (let i = 0; i < 6; i++) {
       console.log(date)
       date.getDate(date.getDate()+i)
       dates.push({
           'day': date.getDay(),
           'weekDay': getWeekDay(date),
           'date': date.date.getDay()+'.'+date.getMonth()+'.'+date.getFullYear()
       })
   }

   return dates
}*/
</script>

<style scoped>

</style>
