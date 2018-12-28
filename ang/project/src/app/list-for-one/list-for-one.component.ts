import { Component, OnInit } from '@angular/core';
import { HttpClient} from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';
import { isNull } from 'util';

@Component({
  selector: 'app-list-for-one',
  templateUrl: './list-for-one.component.html',
  styleUrls: ['./list-for-one.component.css']
})
export class ListForOneComponent implements OnInit {

  constructor(private httpClient: HttpClient, private route: ActivatedRoute){}
  list: any;
  name: any;
  
  ngOnInit(){
    this.httpClient.get('http://127.0.0.1:8000/api/' + this.route.snapshot.paramMap.get('id'), {responseType: 'json'}).subscribe(
      (response) => {

        this.list = this.responseSanitizer(response);
      },
      (error) => {console.log('Erreur ! : ' + error);
      }
    );

    this.httpClient.get('http://127.0.0.1:8000/api/getuser/' + this.route.snapshot.paramMap.get('id'), {responseType: 'json'}).subscribe(
      (response) => {

        this.name = {nom: response[0].nom as string,
          prenom: response[0].prenom as string,
          id: this.route.snapshot.paramMap.get('id') as string
        };
      },
      (error) => {console.log('Erreur ! : ' + error);
      }
    );
  }


  responseSanitizer(list: any){
    list.forEach((element) => {
      if(isNull(element.created)){
        element.created = {date: new Date(null)};
      }

      if(isNull(element.dateValidation)){
        element.dateValidation = {date: new Date(null)};
      }

      if(isNull(element.updated)){
        element.updated = {date: new Date(null)};
      }
    });
    return list;
  }
}
