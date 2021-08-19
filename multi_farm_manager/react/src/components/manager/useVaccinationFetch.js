import { useEffect } from "react";

export const useVaccinationFetch = (url, callback)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        callback(data);
        // console.log(data[0]);
        // console.log(data[1]);
        // console.log(data[2]);
    }

    useEffect(()=>{
        getData();
    }, [])
}