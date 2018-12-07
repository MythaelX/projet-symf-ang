import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';
import {AppComponent} from './app.component';
//import {HomeComponent} from './home/home.component';
import {ListComponent} from './list/list.component';
//import {RecupComponent} from './recup/recup.component';
import {NotFoundComponent} from './not-found/not-found.component';

const appRoutes: Routes = [
   //{ path: '', component: HomeComponent },
   { path: 'list', component: ListComponent },
   //{ path: 'recup', component: RecupComponent },
   //{ path: 'recup/:value', component: RecupComponent },
   { path: '**', component: NotFoundComponent }
];

@NgModule({
    imports: [
      RouterModule.forRoot(appRoutes)
    ],
    exports: [
      RouterModule
    ],
    providers: []
  })
export class AppRoutingModule{ }