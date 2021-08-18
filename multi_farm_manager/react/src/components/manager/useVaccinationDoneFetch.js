import { useEffect } from "react";

export const useVaccinationDoneFetch = (url, type, callback, callback1)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        if(type == 2)
        {
            callback({'vacc2_date': new Date()});
        }
        else{
            callback({'vacc1_date': new Date()});
        }
        callback1(data);
        
        console.log(data[0]);
        console.log(data[1]);
        console.log(data[2]);
    }

    useEffect(()=>{
        getData();
    }, [])
}