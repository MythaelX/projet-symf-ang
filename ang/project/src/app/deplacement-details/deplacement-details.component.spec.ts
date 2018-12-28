import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DeplacementDetailsComponent } from './deplacement-details.component';

describe('DeplacementDetailsComponent', () => {
  let component: DeplacementDetailsComponent;
  let fixture: ComponentFixture<DeplacementDetailsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DeplacementDetailsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DeplacementDetailsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
