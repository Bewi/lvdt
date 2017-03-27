import Home from './home/Home.vue';
import ProductList from './products/ProductList.vue';
import Product from './product/Product.vue';
import Legal from './legal/Legal.vue';
import TermOfSales from './legal/TermOfSales.vue';
import TermOfUse from './legal/TermOfUse.vue';

const routes = [
    { path: '/', name: 'home', component: Home, searchable: true },
    { path: '/products', name: 'products', component: ProductList, searchable: true },
    { path: '/product/:productId', name: 'product', component: Product, searchable: true },
    { path: '/legal', name: 'legal', component: Legal, searchable: false },
    { path: '/term-of-sales', name: 'term-of-sales', component: TermOfSales, searchable: false },
    { path: '/term-of-use', name: 'term-of-use', component: TermOfUse, searchable: false },
]

export default routes;