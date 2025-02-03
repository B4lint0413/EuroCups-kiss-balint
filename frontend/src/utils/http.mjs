import axios from 'axios'

export const http = axios.create({
    baseURL: "https://backend.vm1.test/api",
    headers:{
        "Accept": "application/json",
        "Content-Type": "application/json" 
    }
})
