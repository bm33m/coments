//import { Component } from '@angular/core';
import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { DbService } from './dbservice';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'commentsapp';
  data = [
    {"created": "", "topic": "Cool topic.", "comment":  "This topic is Cool.", "username": "Cool"},
    {"created": "", "topic": "Awesome topic.", "comment":  "This topic is Awesome.", "username": "Awesome"},
  ];
  count;
  time;
  date;
  comments = [];

  constructor(private dataService: DbService) {
  }

  ngOnInit() {
    this.count = 0;
    this.more();
  }

  more(xcount=0){
    alert(xcount);
    this.count = 0;
    let info = this.dataService.getComments();
    info.subscribe(res =>{
      console.log('info: ', res);
      this.comments = res["comments"];
      this.data = res["data"];
      this.time = res["time"];
      this.date = res["date"];
      alert(res);
      console.log('info: ', res);
      console.log("data: ", this.data);
      console.log("comments: ", this.comments);
      console.log("date: ", this.date);
      console.log("time: ", this.time);
      console.log("username: ", this.data[0].username)
    });
  }

}
