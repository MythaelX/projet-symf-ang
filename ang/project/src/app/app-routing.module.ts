import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';
import {AppComponent} from './app.component';
import {ListComponent} from './list/list.component';
import {ListForOneComponent} from './list-for-one/list-for-one.component';
//import {RecupComponent} from './recup/recup.component';
import {NotFoundComponent} from './not-found/not-found.component';
import {DeplacementDetailsComponent} from './deplacement-details/deplacement-details.component';
import { FormDeplacementComponent } from './form-deplacement/form-deplacement.component';
import { FormDeplacementJourComponent } from './form-deplacement-jour/form-deplacement-jour.component';

const appRoutes: Routes = [
   { path: '', component: AppComponent },
   { path: 'list', component: ListComponent },
   { path: 'formDeplacement', component: FormDeplacementComponent },
   { path: 'formDeplacementJour/:deplacementId', component: FormDeplacementJourComponent },
   { path: 'deplacementdetails/:userId/:year/:month/:deplacementId', component: DeplacementDetailsComponent },
   //{ path: 'recup', component: RecupComponent },
   { path: 'listforone/:id', component: ListForOneComponent },
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
