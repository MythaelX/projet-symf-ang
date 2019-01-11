import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpHeaders} from '@angular/common/http';
import {DeplacementJour} from '../util/DeplacementJour';
import { Router,ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-form-deplacement-jour',
  templateUrl: './form-deplacement-jour.component.html',
  styleUrls: ['./form-deplacement-jour.component.css']
})
export class FormDeplacementJourComponent implements OnInit {

  deplacementJour: DeplacementJour;
  list: any;
  deplacementId: string;
  constructor(private httpClient: HttpClient,private router: Router,private route: ActivatedRoute) { }

  ngOnInit() {
    this.deplacementId=this.route.snapshot.paramMap.get('deplacementId');

    this.httpClient.get('http://127.0.0.1:8000/api/getTypeDeplacement/', {responseType: 'json'}).subscribe(
       (response) => {
         this.list = response;
         //console.log(response);
       },
       (error) => {console.log(error);
       }
     );

    this.deplacementJour=new DeplacementJour(0,0,0,0);

  }

   register() {
      console.log(this.deplacementJour);
       return this.httpClient.get('http://127.0.0.1:8000/api/setDeplacementJour/'+this.deplacementJour.getNbKm()+'/'+this.deplacementJour.getMontant()+'/'+this.deplacementJour.getJour()+'/'+this.deplacementJour.getType()+'/'+this.deplacementId, {responseType: 'json'}).subscribe(
          (res) => {
            console.log('ok');
            alert("Deplacement Jour créé");
            this.router.navigate(['list'])
          },
          (error) => {console.log(error);
          }
        );
     }
}
