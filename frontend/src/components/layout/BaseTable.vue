<template>
    <table>
        <thead>
            <tr>
                <th>Év</th>
                <th>Szervező</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="eurocup of eurocups">
                <td><RouterLink :to="{name: 'eurocup', params: {id: eurocup.id}}">{{eurocup.year}}</RouterLink></td>
                <td><span class="bg-green-800 p-1 rounded">{{eurocup.organiser}}</span></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import {useEurocupStore} from '@stores/EurocupStore.mjs'
import {mapActions, mapState} from 'pinia'

export default{
    computed:{
        ...mapState(useEurocupStore, ['eurocups'])
    },
    methods:{
        ...mapActions(useEurocupStore, ['getEurocups'])
    },
    async mounted(){
        await this.getEurocups();
        console.log(this.eurocups)
    }
}
</script>