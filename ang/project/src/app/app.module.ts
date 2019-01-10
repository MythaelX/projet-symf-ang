import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule }   from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { ListComponent } from './list/list.component';
import { AppRoutingModule } from './app-routing.module';
import { NotFoundComponent } from './not-found/not-found.component';
import { ListForOneComponent } from './list-for-one/list-for-one.component';
import { DeplacementDetailsComponent } from './deplacement-details/deplacement-details.component';
import { FormDeplacementComponent } from './form-deplacement/form-deplacement.component';
import { FormDeplacementJourComponent } from './form-deplacement-jour/form-deplacement-jour.component';

@NgModule({
  declarations: [
    AppComponent,
    ListComponent,
    NotFoundComponent,
    ListForOneComponent,
    DeplacementDetailsComponent,
    FormDeplacementComponent,
    FormDeplacementJourComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
