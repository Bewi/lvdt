import Home from './home/Home.vue';
import ProductList from './products/ProductList.vue';
import Product from './product/Product.vue';
import Account from './Account/Account.vue';
import Sale from './Account/Sale.vue';
import Legal from './legal/Legal.vue';
import TermOfSales from './legal/TermOfSales.vue';
import TermOfUse from './legal/TermOfUse.vue';
import NotFound from './layout/NotFound.vue';
import ServerError from './layout/ServerError.vue';

const routes = [
    { path: '/', name: 'home', component: Home, searchable: true, legalPage: false, hasNav: true },
    { path: '/products', name: 'products', component: ProductList, searchable: true, legalPage: false, hasNav: true },
    { path: '/product/:productId', name: 'product', component: Product, searchable: true, legalPage: false, hasNav: true },
    { path: '/account', name: 'account', component: Account, searchable: false, legalPage: false, hasNav: false },
    { path: '/sale/:saleId', name: 'sale', component: Sale, searchable: false, legalPage: false, hasNav: false },
    { path: '/legal', name: 'legal', component: Legal, searchable: false, legalPage: true, hasNav: false },
    { path: '/term-of-sales', name: 'term-of-sales', component: TermOfSales, searchable: false, legalPage: true, hasNav: false },
    { path: '/term-of-use', name: 'term-of-use', component: TermOfUse, searchable: false, legalPage: true, hasNav: false },
    { path: '/404', name: 'not-found', component: NotFound, searchable: true, legalPage: false, hasNav: true },
    { path: '/500', name: 'server-error', component: ServerError, searchable: true, legalPage: false, hasNav: true }
]

export default routes;