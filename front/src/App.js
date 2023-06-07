import logo from './logo.svg';
import Posts from './components/pages/Posts'
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
         <Posts/>
 
      </header>
    </div>
  );
}

export default App;
