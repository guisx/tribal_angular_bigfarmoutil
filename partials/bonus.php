<div class="container">
    <div class="page-header">
        <h1>Calculatrice du bonus du contrat</h1>
    </div>
	<div class="table-responsive">
		<table ng-controller="PourcentCtrl" width="100%" align="center" style="border: 1px solid #ffefd1;" cellspacing="0" cellpadding="0">
			<tr>
				<td width="50%" height="80" align="center" bgcolor="#57230f" style="color: #ffefd1;border: 1px solid #ffefd1;">
					<label for="montant"><strong>Montant du contrat :</strong></label> 
					<input type="number" name="montant" id="montant" style="color: #57230f;" ng-model="montant" style="width:150px;" value="10">
				</td>
				<td width="50%" height="80" align="center" bgcolor="#57230f" style="color: #ffefd1;border: 1px solid #ffefd1;">
					<label for="remise"><strong>Pourcentage de bonus :</strong></label> 
					<input type="number" name="remise" id="remise" style="color: #57230f;" ng-model="remise" style="width:150px;" value="10"> %
				</td>
			</tr>
			<tr>				
				<td colspan="2" bgcolor="#57230f" align="center">
					<h4>{{"TOTAL AVEC BONUS : " + (montant +((montant * remise) / 100))  }} Dollars</h4>
				</td>
			</tr>
		</table>
	</div>

	<br />

    <div class="alert alert-info">
        La ligne en couleur indique la valeur du contrat et la ligne juste en-dessous indique le pourcentage de bonus correspondant.
    </div>	

<div class="table-responsive">
	<div class="table-responsive"><table width="100%" align="center" class="table table-bordered table-striped" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center" bgcolor="#57230f"><h4>0</h4></td>
			<td align="center" bgcolor="#57230f"><h4>1</h4></td>
			<td align="center" bgcolor="#57230f"><h4>2</h4></td>
			<td align="center" bgcolor="#57230f"><h4>3</h4></td>
			<td align="center" bgcolor="#57230f"><h4>4</h4></td>
			<td align="center" bgcolor="#57230f"><h4>5</h4></td>
			<td align="center" bgcolor="#57230f"><h4>6</h4></td>
			<td align="center" bgcolor="#57230f"><h4>7</h4></td>
			<td align="center" bgcolor="#57230f"><h4>8</h4></td>
			<td align="center" bgcolor="#57230f"><h4>9</h4></td>
		</tr>
		<tr>
			<td align="center"><b>0.00%</b></td>
			<td align="center"><b>1.92%</b></td>
			<td align="center"><b>3.43%</b></td>
			<td align="center"><b>4.69%</b></td>
			<td align="center"><b>5.76%</b></td>
			<td align="center"><b>6.69%</b></td>
			<td align="center"><b>7.52%</b></td>
			<td align="center"><b>8.26%</b></td>
			<td align="center"><b>8.93%</b></td>
			<td align="center"><b>9.55%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>10</h4></td>
			<td align="center" bgcolor="#57230f"><h4>11</h4></td>
			<td align="center" bgcolor="#57230f"><h4>12</h4></td>
			<td align="center" bgcolor="#57230f"><h4>13</h4></td>
			<td align="center" bgcolor="#57230f"><h4>14</h4></td>
			<td align="center" bgcolor="#57230f"><h4>15</h4></td>
			<td align="center" bgcolor="#57230f"><h4>16</h4></td>
			<td align="center" bgcolor="#57230f"><h4>17</h4></td>
			<td align="center" bgcolor="#57230f"><h4>18</h4></td>
			<td align="center" bgcolor="#57230f"><h4>19</h4></td>
		</tr>
		<tr>
			<td align="center"><b>10.12%</b></td>
			<td align="center"><b>10.65%</b></td>
			<td align="center"><b>11.14%</b></td>
			<td align="center"><b>11.60%</b></td>
			<td align="center"><b>12.04%</b></td>
			<td align="center"><b>12.44%</b></td>
			<td align="center"><b>12.83%</b></td>
			<td align="center"><b>13.20%</b></td>
			<td align="center"><b>13.55%</b></td>
			<td align="center"><b>13.89%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>20</h4></td>
			<td align="center" bgcolor="#57230f"><h4>21</h4></td>
			<td align="center" bgcolor="#57230f"><h4>22</h4></td>
			<td align="center" bgcolor="#57230f"><h4>23</h4></td>
			<td align="center" bgcolor="#57230f"><h4>24</h4></td>
			<td align="center" bgcolor="#57230f"><h4>25</h4></td>
			<td align="center" bgcolor="#57230f"><h4>26</h4></td>
			<td align="center" bgcolor="#57230f"><h4>27</h4></td>
			<td align="center" bgcolor="#57230f"><h4>28</h4></td>
			<td align="center" bgcolor="#57230f"><h4>29</h4></td>
		</tr>
		<tr>
			<td align="center"><b>14.21%</b></td>
			<td align="center"><b>14.51%</b></td>
			<td align="center"><b>14.81%</b></td>
			<td align="center"><b>15.09%</b></td>
			<td align="center"><b>15.36%</b></td>
			<td align="center"><b>15.62%</b></td>
			<td align="center"><b>15.88%</b></td>
			<td align="center"><b>16.12%</b></td>
			<td align="center"><b>16.36%</b></td>
			<td align="center"><b>16.59%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>30</h4></td>
			<td align="center" bgcolor="#57230f"><h4>31</h4></td>
			<td align="center" bgcolor="#57230f"><h4>32</h4></td>
			<td align="center" bgcolor="#57230f"><h4>33</h4></td>
			<td align="center" bgcolor="#57230f"><h4>34</h4></td>
			<td align="center" bgcolor="#57230f"><h4>35</h4></td>
			<td align="center" bgcolor="#57230f"><h4>36</h4></td>
			<td align="center" bgcolor="#57230f"><h4>37</h4></td>
			<td align="center" bgcolor="#57230f"><h4>38</h4></td>
			<td align="center" bgcolor="#57230f"><h4>39</h4></td>
		</tr>
		<tr>
			<td align="center"><b>16.81%</b></td>
			<td align="center"><b>17.02%</b></td>
			<td align="center"><b>17.23%</b></td>
			<td align="center"><b>17.44%</b></td>
			<td align="center"><b>17.64%</b></td>
			<td align="center"><b>17.83%</b></td>
			<td align="center"><b>18.02%</b></td>
			<td align="center"><b>18.20%</b></td>
			<td align="center"><b>18.38%</b></td>
			<td align="center"><b>18.55%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>40</h4></td>
			<td align="center" bgcolor="#57230f"><h4>41</h4></td>
			<td align="center" bgcolor="#57230f"><h4>42</h4></td>
			<td align="center" bgcolor="#57230f"><h4>43</h4></td>
			<td align="center" bgcolor="#57230f"><h4>44</h4></td>
			<td align="center" bgcolor="#57230f"><h4>45</h4></td>
			<td align="center" bgcolor="#57230f"><h4>46</h4></td>
			<td align="center" bgcolor="#57230f"><h4>47</h4></td>
			<td align="center" bgcolor="#57230f"><h4>48</h4></td>
			<td align="center" bgcolor="#57230f"><h4>49</h4></td>
		</tr>
		<tr>
			<td align="center"><b>18.72%</b></td>
			<td align="center"><b>18.89%</b></td>
			<td align="center"><b>19.05%</b></td>
			<td align="center"><b>19.21%</b></td>
			<td align="center"><b>19.37%</b></td>
			<td align="center"><b>19.52%</b></td>
			<td align="center"><b>19.67%</b></td>
			<td align="center"><b>19.82%</b></td>
			<td align="center"><b>19.96%</b></td>
			<td align="center"><b>20.10%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>50</h4></td>
			<td align="center" bgcolor="#57230f"><h4>51</h4></td>
			<td align="center" bgcolor="#57230f"><h4>52</h4></td>
			<td align="center" bgcolor="#57230f"><h4>53</h4></td>
			<td align="center" bgcolor="#57230f"><h4>54</h4></td>
			<td align="center" bgcolor="#57230f"><h4>55</h4></td>
			<td align="center" bgcolor="#57230f"><h4>56</h4></td>
			<td align="center" bgcolor="#57230f"><h4>57</h4></td>
			<td align="center" bgcolor="#57230f"><h4>58</h4></td>
			<td align="center" bgcolor="#57230f"><h4>59</h4></td>
		</tr>
		<tr>
			<td align="center"><b>20.24%</b></td>
			<td align="center"><b>20.38%</b></td>
			<td align="center"><b>20.51%</b></td>
			<td align="center"><b>20.64%</b></td>
			<td align="center"><b>20.77%</b></td>
			<td align="center"><b>20.89%</b></td>
			<td align="center"><b>21.02%</b></td>
			<td align="center"><b>21.14%</b></td>
			<td align="center"><b>21.23%</b></td>
			<td align="center"><b>21.38%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>60</h4></td>
			<td align="center" bgcolor="#57230f"><h4>61</h4></td>
			<td align="center" bgcolor="#57230f"><h4>62</h4></td>
			<td align="center" bgcolor="#57230f"><h4>63</h4></td>
			<td align="center" bgcolor="#57230f"><h4>64</h4></td>
			<td align="center" bgcolor="#57230f"><h4>65</h4></td>
			<td align="center" bgcolor="#57230f"><h4>66</h4></td>
			<td align="center" bgcolor="#57230f"><h4>67</h4></td>
			<td align="center" bgcolor="#57230f"><h4>68</h4></td>
			<td align="center" bgcolor="#57230f"><h4>69</h4></td>
		</tr>
		<tr>
			<td align="center"><b>21.49%</b></td>
			<td align="center"><b>21.61%</b></td>
			<td align="center"><b>21.72%</b></td>
			<td align="center"><b>21.83%</b></td>
			<td align="center"><b>21.94%</b></td>
			<td align="center"><b>22.05%</b></td>
			<td align="center"><b>22.16%</b></td>
			<td align="center"><b>22.26%</b></td>
			<td align="center"><b>22.36%</b></td>
			<td align="center"><b>22.46%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>70</h4></td>
			<td align="center" bgcolor="#57230f"><h4>71</h4></td>
			<td align="center" bgcolor="#57230f"><h4>72</h4></td>
			<td align="center" bgcolor="#57230f"><h4>73</h4></td>
			<td align="center" bgcolor="#57230f"><h4>74</h4></td>
			<td align="center" bgcolor="#57230f"><h4>75</h4></td>
			<td align="center" bgcolor="#57230f"><h4>76</h4></td>
			<td align="center" bgcolor="#57230f"><h4>77</h4></td>
			<td align="center" bgcolor="#57230f"><h4>78</h4></td>
			<td align="center" bgcolor="#57230f"><h4>79</h4></td>
		</tr>
		<tr>
			<td align="center"><b>22.56%</b></td>
			<td align="center"><b>22.66%</b></td>
			<td align="center"><b>22.76%</b></td>
			<td align="center"><b>22.86%</b></td>
			<td align="center"><b>22.95%</b></td>
			<td align="center"><b></b></td>
			<td align="center"><b>23.14%</b></td>
			<td align="center"><b>23.23%</b></td>
			<td align="center"><b></b></td>
			<td align="center"><b></b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>80</h4></td>
			<td align="center" bgcolor="#57230f"><h4>81</h4></td>
			<td align="center" bgcolor="#57230f"><h4>82</h4></td>
			<td align="center" bgcolor="#57230f"><h4>83</h4></td>
			<td align="center" bgcolor="#57230f"><h4>84</h4></td>
			<td align="center" bgcolor="#57230f"><h4>85</h4></td>
			<td align="center" bgcolor="#57230f"><h4>86</h4></td>
			<td align="center" bgcolor="#57230f"><h4>87</h4></td>
			<td align="center" bgcolor="#57230f"><h4>88</h4></td>
			<td align="center" bgcolor="#57230f"><h4>89</h4></td>
		</tr>
		<tr>
			<td align="center"><b>23.50%</b></td>
			<td align="center"><b>23.58%</b></td>
			<td align="center"><b></b></td>
			<td align="center"><b>23.76%</b></td>
			<td align="center"><b>23.84%</b></td>
			<td align="center"><b>23.92%</b></td>
			<td align="center"><b>24.01%</b></td>
			<td align="center"><b>24.09%</b></td>
			<td align="center"><b></b></td>
			<td align="center"><b>24.25%</b></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#57230f"><h4>90</h4></td>
			<td align="center" bgcolor="#57230f"><h4>91</h4></td>
			<td align="center" bgcolor="#57230f"><h4>92</h4></td>
			<td align="center" bgcolor="#57230f"><h4>93</h4></td>
			<td align="center" bgcolor="#57230f"><h4>94</h4></td>
			<td align="center" bgcolor="#57230f"><h4>95</h4></td>
			<td align="center" bgcolor="#57230f"><h4>96</h4></td>
			<td align="center" bgcolor="#57230f"><h4>97</h4></td>
			<td align="center" bgcolor="#57230f"><h4>98</h4></td>
			<td align="center" bgcolor="#57230f"><h4>99</h4></td>
		</tr>
		<tr>
			<td align="center"><b></b></td>
			<td align="center"><b>24.40%</b></td>
			<td align="center"><b>24.48%</b></td>
			<td align="center"><b>24.56%</b></td>
			<td align="center"><b></b></td>
			<td align="center"><b>24.71%</b></td>
			<td align="center"><b>24.78%</b></td>
			<td align="center"><b></b></td>
			<td align="center"><b></b></td>
			<td align="center"><b>25.00%</b></td>
		</tr>
	</table></div>
	<p>Source : http://fr.board.goodgamestudios.com/bigfarm/showthread.php?119506-INFO-Bonus-selon-la-valeur-des-contrats-du-march%C3%A9</p>
</div>