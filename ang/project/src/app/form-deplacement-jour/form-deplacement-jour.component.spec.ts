import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FormDeplacementJourComponent } from './form-deplacement-jour.component';

describe('FormDeplacementJourComponent', () => {
  let component: FormDeplacementJourComponent;
  let fixture: ComponentFixture<FormDeplacementJourComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FormDeplacementJourComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FormDeplacementJourComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
