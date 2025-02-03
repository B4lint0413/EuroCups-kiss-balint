import {defineStore} from 'pinia'
import {http} from '@utils/http.mjs'

export const useTeamStore = defineStore('teams', {
    states(){
        return {
            teams: []
        }
    },
    actions:{
        async getTeams(){
            let resp = await http.get("/teams");
            this.teams = resp.data.data;
        },
        async createTeam(data){
            let resp = await http.post("/teams", data);
            this.teams.push(resp);
        }
    }
})