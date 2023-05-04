import axios from 'axios';
import { API_URL } from "../config/const.config";

export default function AuthService (){
    const login = (email, password) => {
        return axios.post( 
            API_URL + 'login', 
            {email:email, password:password}
        ).then(res =>{
            if(res.success == true){
                localStorage.setItem('user', JSON.stringify(res.data));
                console.log(res.msg);
            }else{
                console.log(res.msg);
            }
        });
    }

    const register = (user) => {
        return axios.post(API_URL+'register', user).then(res =>{
            if(res.success == true){

            }else{

            }
        });
    }

    const logout = () =>{
        return axios.get(API_URL+logout);
    }
}