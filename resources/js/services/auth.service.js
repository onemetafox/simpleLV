import axios from 'axios';
import { API_URL } from "../config/const.config";

class AuthService {
    login (email, password) {
        return axios.post( 
            API_URL + 'login', 
            {email:email, password:password}
        ).then(res =>{
            if(res.success == true){
                localStorage.setItem('user', JSON.stringify(res.data));
            }
            return res;
        });
    }

    register (user){
        return axios.post(API_URL+'register', user).then(res =>{
            return res;
        });
    }

    logout () {
        return axios.get(API_URL+logout);
    }
}
export default new AuthService();