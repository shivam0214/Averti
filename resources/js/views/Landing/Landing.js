import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import '../Landing/Landing.css';
import Image from '../Image/Image';
import 'bootstrap/dist/css/bootstrap.min.css';
import { DefaultPlayer as Video } from 'react-html5video';
import 'react-html5video/dist/styles.css';
import {
  Row,
  Col,
  Button,
  Card,
  CardBody,
  Modal, 
  ModalBody, 
  ModalHeader,
  FormGroup,
  Input,
  InputGroup,
  InputGroupAddon,
  InputGroupText,
  CardHeader,
  NavLink,
  Nav,
} from 'reactstrap';

class Landing extends Component{
  constructor(props){
    super(props);
    this.state = {
      modal: false,
      modal1:false,
      Advisorprofile :false,
      email:false,
      image :false,
      small: false,
      hidden:true,
      password:""

    }
    this.toggle = this.toggle.bind(this);
    this.toggle1 = this.toggle1.bind(this);
    this.email=this.email.bind(this);
    this.email2=this.email2.bind(this);
    this.Advisorprofile=this.Advisorprofile.bind(this);
    this.image=this.image.bind(this);
    this.handlePasswordChange = this.handlePasswordChange.bind(this);
    this.toggleShow = this.toggleShow.bind(this);
    }
    handleChange(field, e){         
        let fields = this.state.fields;
        fields[field] = e.target.value;        
        this.setState({fields});
      }
    toggle() {
      this.setState({
        modal: !this.state.modal,});
    }
    toggle1() {
      this.setState({
        modal1: !this.state.modal1,});
    }
    email(){
      this.props.history.push({pathname: '/email', query: { lang: 'user' }});
    }
    email2(){
      this.props.history.push({pathname: '/email', query: { lang: 'advisor' }});
    }
    Advisorprofile(){
      this.props.history.push('/advisor');
    }
    image(){
      this.setState({
        image: !this.state.image,});
      }
      handlePasswordChange(e) {
        this.setState({ password: e.target.value });
      }
    
      toggleShow() {
        this.setState({ hidden: !this.state.hidden });
      }
    
      componentDidMount() {
        if (this.props.password) {
          this.setState({ password: this.props.password });
        }
      }
    render(){      
      return<div>
      <Row>
        <Col className="text-center bg-white"><Image/></Col>
        </Row>
        <Row>
        <Col className="text-center bg-white">
        Averti365 was developed for a unique community of life logistic advisors<br/> and advocates who seek to provide world class experiences <br/>on behalf of their clients.
        </Col>
      </Row>
      <hr className="style-one"></hr>
      <Row>
      <Col md="12" className="text-center bg-white">
      <Button onClick={this.toggle} size="md" color="info" className="mr-1 large-text">Sign In</Button>
      </Col>
      <Col md="12" className="large-text text-center" id="link1"><a className="section-scroll" href="">How may we help you?</a></Col>  
      <Col>
      <Video autoPlay loop muted
            controls={['PlayPause', 'Seek', 'Time', 'Volume', 'Fullscreen']}
           >
            <source src={("assets/videos/123.mp4")} type="video/webm" />
        </Video>
      </Col>
      <Col md="12">
          <Nav className="text-center">
          <NavLink className="section-scroll" href="#">Terms and Conditions</NavLink>
               <NavLink className="section-scroll" href="#">Privacy Policy</NavLink>
          </Nav>
        </Col>
        <Col md="12">
            <h3 id="body" className="module-title font-alt">WORLD’S FIRST TOTAL LIFE MANAGEMENT SYSTEM</h3>
            <hr className="style-one"></hr>

            <div className="style-one">
             <div id="pb" className="module-subtitle font-serif large-text">Evoking the futurist services of tomorrow coupled with thoughtful, client-centric design, our new, fully customized Life Filtering Service System will offer exceptional life expeditions for a unique group of visionaries.
             </div>
          </div>
          <div className="scroll-up float-right"><a href="#totop"><i className="fa fa-angle-double-up"></i></a>
          </div>
      
        </Col>
      </Row>
      
      {/* model */}
      <Row>
          <Col md="6" xs="6">
                <Modal isOpen={this.state.modal} toggle={this.toggle} className={this.props.className}>
                  <ModalBody> 
                  <Col className="text-center bg-white"><Image/></Col>         
                  <h3 className="text-info">SIGN IN</h3>
                  <p className="text-muted">Sign In to your account</p>  
                  <FormGroup>
                  <InputGroup className="mb-3">
                <Input  type="text" placeholder="Email" autoComplete="Email" />
                      </InputGroup>
                      <InputGroup className="mb-3">
                      <Input placeholder="Password" type={this.state.hidden ? "password" : "text"} value={this.state.password} onChange={this.handlePasswordChange}/>
                          <InputGroupText>
                          <i className="fa fa-eye icon" onClick={this.toggleShow}></i>
                          </InputGroupText>
                     
                      </InputGroup>
                      <Col md="12" className="text-right">  
                        <Button type="submit"  size="md" color="info">LogIn</Button>
                    </Col>                                
                    </FormGroup>
                    <FormGroup className="form-actions">
                    <Button  onClick={this.email} color="info" className="mr-1">Apply For user</Button>
                    <Button onClick={this.email2} color="info" className="mr-1">Apply For Advisor</Button>
                    </FormGroup>
                   {/*  <Col> Are You New User??<a href="#/addprofile" className="text-info">SignUp Here</a>  
                    </Col> */}
                    </ModalBody>
                </Modal>
                  
          </Col>
        </Row>
      </div>
    }

}
export default Landing;