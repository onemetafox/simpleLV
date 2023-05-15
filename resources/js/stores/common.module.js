import commonService from "../services/common.service";

const initialState = {
    page_info : {
        title : "Dashboard",
        active_menu: "dashboard",
        description : ""
    }
}
const common = {
    namespace: true,
    state : initialState,
    actions : {
        setPageInfo({commit} , data){

        }
    },
}