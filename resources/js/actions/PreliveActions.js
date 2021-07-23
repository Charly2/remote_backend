import axios from 'axios'

export default {
    getPosts({ commit }) {
        axios.get('https://jsonplaceholder.typicode.com/posts')
            .then(response => {
                commit('SET_POSTS', response.data)
            })
    }

}
