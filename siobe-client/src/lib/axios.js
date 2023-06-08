import Axios from 'axios'

const axiosClient = Axios.create({
    baseURL: import.meta.env.VITE_PUBLIC_BACKEND_URL,
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
    },
    withCredentials: true,
})

export default axiosClient
