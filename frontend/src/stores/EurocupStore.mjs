import {defineStore} from 'pinia'
import {http} from '@utils/http.mjs'

export const useEurocupStore = defineStore('eurocups', {
    states(){
        return {
            eurocups: []
        }
    },
    actions:{
        async getEurocups(){
            let resp = await http.get("/eurocups");
            this.eurocups = resp.data.data;
        },
        async getEurocup(id){
            let resp = await http.get(`/eurocups/${id}`);
            return resp.data.data;
        },
        async updateEurocup(id, data){
            let resp = await http.put(`/eurocups/${id}`, data);
            this.eurocups.splice(this.eurocups.indexOf(this.eurocups.find((eurocup) => eurocup.id === id)), 1, resp.data.data);
        }
    },
    getters: {
        eurocupOptions() {
            const options = {}
            for (const eurocup of this.eurocups) {
                options[eurocup.id] = eurocup.name
            }
            return options
        }
    }
})