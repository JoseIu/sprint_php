@extends('layout')

@section('content')
<section class="home-component">
        <div class="home-component__content about-us">
          <div class="wrapper">
            <span class="home-component__subtitle title">THE ULTIMATE LUXURY</span>
            <h2 class="home-component__title old">About Us</h2>
          </div>
        </div>
      </section>

      <section class="about-video wrapper2">
        <video
          class="about-video__video"
          src="./assets/videos/hotel_miranda.mp4"
          controls
          kind="captions"
        ></video>

        <h2 class="about-video__title old">
          Hello. Our hotel has been present for over 20 years. We make the best for all our
          customers.
        </h2>

        <ul class="about-video__services">
          <!-- 1 -->
          <li class="about-video__service">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="about-video__service-img"
              viewBox="0 0 100 125"
              x="0px"
              y="0px"
            >
              <g>
                <path
                  d="M77,64v-.135A17.259,17.259,0,0,0,92,47V38a9.121,9.121,0,0,0-9-9H23V64a18.96,18.96,0,0,0,7.381,15H8.128L28.571,92H70.74L90.784,79.133l-21.25-.069A18.963,18.963,0,0,0,77,64Zm0-31h6a5.13,5.13,0,0,1,5,5v9A13.407,13.407,0,0,1,77,59.831ZM69.566,88H29.735l-7.863-5H49.994l27.222.089ZM42,79A15.017,15.017,0,0,1,27,64V33H73V64A15.017,15.017,0,0,1,58,79H42Z"
                />
                <path
                  d="M35.581,23.944h4a3.107,3.107,0,0,1,.461-1.744,7.014,7.014,0,0,0,.905-3.573,7.019,7.019,0,0,0-.905-3.574,3.1,3.1,0,0,1-.461-1.744,3.092,3.092,0,0,1,.461-1.739A7,7,0,0,0,40.947,8h-4a3.089,3.089,0,0,1-.461,1.739,7.008,7.008,0,0,0-.9,3.57,7.029,7.029,0,0,0,.9,3.573,3.1,3.1,0,0,1,.462,1.745,3.1,3.1,0,0,1-.462,1.744A7.029,7.029,0,0,0,35.581,23.944Z"
                />
                <path
                  d="M48.108,23.944h4A3.1,3.1,0,0,1,52.57,22.2a7.014,7.014,0,0,0,.905-3.573,7.019,7.019,0,0,0-.905-3.574,3.1,3.1,0,0,1-.462-1.744,3.084,3.084,0,0,1,.462-1.739A7,7,0,0,0,53.475,8h-4a3.089,3.089,0,0,1-.461,1.739,7,7,0,0,0-.906,3.57,7.018,7.018,0,0,0,.905,3.573,3.1,3.1,0,0,1,.462,1.745,3.1,3.1,0,0,1-.462,1.744A7.018,7.018,0,0,0,48.108,23.944Z"
                />
                <path
                  d="M60.636,23.944h4A3.1,3.1,0,0,1,65.1,22.2,7.014,7.014,0,0,0,66,18.627a7.019,7.019,0,0,0-.905-3.574,3.1,3.1,0,0,1-.462-1.744A3.084,3.084,0,0,1,65.1,11.57,7.015,7.015,0,0,0,66,8H62a3.089,3.089,0,0,1-.461,1.739,7,7,0,0,0-.906,3.57,7.018,7.018,0,0,0,.9,3.573A3.1,3.1,0,0,1,62,18.627a3.1,3.1,0,0,1-.462,1.744A7.018,7.018,0,0,0,60.636,23.944Z"
                />
              </g>
            </svg>

            <h3 class="about-video__service-title">Breakfast</h3>
          </li>
          <!-- 2 -->
          <li class="about-video__service">
            <svg
              class="about-video__service-img"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              x="0px"
              y="0px"
              viewBox="0 0 100 125"
              style="enable-background: new 0 0 100 100"
              xml:space="preserve"
            >
              <path
                d="M85.9,24.6c-2.9-0.5-5.8,0.1-8.2,1.8L62.4,37.5L34,26.9c-1-0.4-2.1-0.2-2.9,0.4l-4.3,2.9c-0.8,0.6-1.3,1.5-1.4,2.4  c-0.1,1,0.3,1.9,1.1,2.6l16.9,14.7l-14.6,9.9c-0.2,0.2-0.6,0.2-0.8,0c0,0-0.1-0.1-0.1-0.1l-15.1-8.8c-0.9-0.5-2.1-0.5-2.9,0.1  l-3.2,2.3c-1.4,1-1.8,3-0.8,4.4c0,0.1,0.1,0.1,0.1,0.1l13.4,14.3c1.8,2.7,4.6,4.4,7.8,5c0.7,0.1,1.5,0.2,2.2,0.2  c2.5,0,4.9-0.7,6.9-2.2L90,44.4c0,0,0.1,0,0.1-0.1c5-3.4,6.3-10.2,2.9-15.2C91.3,26.7,88.8,25.1,85.9,24.6z M88.7,42.2L34.9,73  c0,0-0.1,0-0.1,0.1c-2.1,1.5-4.7,2.1-7.3,1.6c-2.6-0.5-4.8-1.9-6.2-4c0-0.1-0.1-0.1-0.1-0.1L7.8,56.2c-0.2-0.3-0.1-0.7,0.2-0.9  l3.2-2.3c0.1,0,0.2-0.1,0.2,0l15.1,8.8c1.1,0.8,2.6,0.8,3.7,0.1l24-16.3l-1.4-2.1l-7.3,4.9L28.1,33.3c-0.2-0.2-0.2-0.4-0.2-0.5  c0-0.1,0.1-0.4,0.3-0.5l4.3-2.9c0.2-0.1,0.4-0.2,0.6-0.1l29.1,10.9c0.4,0.1,0.8,0.1,1.2-0.2l15.8-11.6c1.9-1.3,4.1-1.8,6.3-1.3  c2.2,0.4,4.1,1.7,5.4,3.5C93.5,34.4,92.5,39.6,88.7,42.2z"
              />
            </svg>

            <h3 class="about-video__service-title">Breakfast</h3>
          </li>
          <!-- 3-->
          <li class="about-video__service">
            <svg
              class="about-video__service-img"
              xmlns="http://www.w3.org/2000/svg"
              version="1.1"
              viewBox="-5.0 -10.0 110.0 135.0"
            >
              <g>
                <path
                  d="m59.59 32.375c0-5.2891-4.3047-9.5898-9.5898-9.5898-5.2891 0-9.5898 4.3008-9.5898 9.5898s4.3008 9.5938 9.5898 9.5938 9.5898-4.3047 9.5898-9.5938zm-17.18 0c0-4.1875 3.4062-7.5898 7.5898-7.5898 4.1875 0 7.5898 3.4062 7.5898 7.5898 0 4.1875-3.4023 7.5938-7.5898 7.5938s-7.5898-3.4062-7.5898-7.5938z"
                />
                <path
                  d="m93.09 83.508-7.7773-21.695c-0.14062-0.39844-0.51953-0.66406-0.94141-0.66406l-28.379 0.003906 10.762-18.281c0.050782-0.085938 0.09375-0.17188 0.10156-0.19141 1.4648-2.7422 2.2383-5.8477 2.2383-8.9727 0-5.4023-2.3047-10.574-6.3203-14.191-4.0742-3.6719-9.3438-5.3711-14.828-4.793-8.5195 0.89453-15.598 7.6992-16.832 16.18-0.63281 4.3594 0.1875 8.6328 2.3477 12.301l9.0664 17.953-25.695-0.003906c-0.40625 0-0.76953 0.24219-0.92188 0.61719l-8.9844 21.695c-0.125 0.30859-0.089843 0.66016 0.09375 0.9375 0.18359 0.27734 0.49609 0.44531 0.83203 0.44531h84.297c0.32422 0 0.63281-0.15625 0.81641-0.42578 0.19141-0.26562 0.23438-0.60547 0.125-0.91406zm-59.996-52.32c1.1016-7.5859 7.4375-13.676 15.062-14.477 0.63281-0.066407 1.2578-0.10156 1.8789-0.10156 4.2266 0 8.2188 1.5234 11.402 4.3906 3.5938 3.2383 5.6562 7.8672 5.6562 12.703 0 2.8008-0.69141 5.5781-2.0039 8.0312-0.011719 0.023437-0.046875 0.089844-0.058594 0.11328l-12.324 20.941c-0.75781 1.2891-2.0508 2.0312-3.543 2.0312h-0.14062c-1.5312-0.050781-2.8555-0.89453-3.5469-2.2617l-10.262-20.316c-1.957-3.3281-2.6914-7.1484-2.1211-11.055zm-23.746 51.66 8.1523-19.695h26.035l0.15625 0.30469c1.0234 2.0312 2.9922 3.2852 5.2656 3.3594l0.20703 0.003906c2.1875 0 4.1562-1.1289 5.2656-3.0156l0.38281-0.64844h28.855l7.0625 19.695z"
                />
                <path
                  d="m50 68.844c-5.1133 0-9.2617 1.25-9.2617 2.7969 0 1.543 4.1445 2.7969 9.2617 2.7969 5.1133 0 9.2617-1.25 9.2617-2.7969s-4.1484-2.7969-9.2617-2.7969z"
                />
              </g>
            </svg>

            <h3 class="about-video__service-title">Breakfast</h3>
          </li>
          <!-- 4 -->
          <li class="about-video__service">
            <svg
              class="about-video__service-img"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              x="0px"
              y="0px"
              viewBox="0 0 64 80"
              enable-background="new 0 0 64 64"
              xml:space="preserve"
            >
              <g>
                <g>
                  <path
                    d="M36,40h-8c-6.6166992,0-12-5.3828125-12-12v-2h32v2C48,34.6171875,42.6166992,40,36,40z M18,28    c0,5.5136719,4.4858398,10,10,10h8c5.5141602,0,10-4.4863281,10-10H18z"
                  />
                </g>
                <g>
                  <path
                    d="M25,55c-2.2055664,0-4-1.7939453-4-4s1.7944336-4,4-4s4,1.7939453,4,4S27.2055664,55,25,55z M25,49    c-1.1030273,0-2,0.8974609-2,2s0.8969727,2,2,2s2-0.8974609,2-2S26.1030273,49,25,49z"
                  />
                </g>
                <g><rect x="24" y="38" width="2" height="10" /></g>
                <g>
                  <path
                    d="M39,55c-2.2055664,0-4-1.7939453-4-4s1.7944336-4,4-4s4,1.7939453,4,4S41.2055664,55,39,55z M39,49    c-1.1030273,0-2,0.8974609-2,2s0.8969727,2,2,2s2-0.8974609,2-2S40.1030273,49,39,49z"
                  />
                </g>
                <g><rect x="38" y="38" width="2" height="10" /></g>
                <g>
                  <rect
                    x="31.0004253"
                    y="35.1783409"
                    transform="matrix(0.5407576 -0.8411785 0.8411785 0.5407576 -21.8955059 46.8947563)"
                    width="1.9991484"
                    height="16.6433163"
                  />
                </g>
                <g>
                  <rect
                    x="23.6783409"
                    y="42.5004272"
                    transform="matrix(0.8411785 -0.5407576 0.5407576 0.8411785 -18.4406662 24.2129784)"
                    width="16.6433163"
                    height="1.9991484"
                  />
                </g>
                <g>
                  <path
                    d="M18.2001953,34H14.5c-1.9296875,0-3.5-1.5703125-3.5-3.5c0-0.9379883,0.3632813-1.8173828,1.0229492-2.4770508    S13.5620117,27,14.5,27H17v2h-2.5c-0.4038086,0-0.78125,0.1552734-1.0629883,0.4370117S13,30.0961914,13,30.5    c0,0.8271484,0.6728516,1.5,1.5,1.5h3.7001953V34z"
                  />
                </g>
                <g>
                  <path
                    d="M49.5,34h-3.7001953v-2H49.5c0.8271484,0,1.5-0.6728516,1.5-1.5c0-0.4038086-0.1552734-0.78125-0.4370117-1.0629883    S49.9038086,29,49.5,29H47v-2h2.5c0.9379883,0,1.8173828,0.3632813,2.4770508,1.0229492S53,29.5620117,53,30.5    C53,32.4296875,51.4296875,34,49.5,34z"
                  />
                </g>
                <g>
                  <path
                    d="M45,28h-4c-1.6542969,0-3-1.3457031-3-3s1.3457031-3,3-3h4c1.6542969,0,3,1.3457031,3,3S46.6542969,28,45,28z M41,24    c-0.5512695,0-1,0.4487305-1,1s0.4487305,1,1,1h4c0.5512695,0,1-0.4487305,1-1s-0.4487305-1-1-1H41z"
                  />
                </g>
                <g>
                  <path
                    d="M22.9882813,28h-4c-1.6542969,0-3-1.3457031-3-3s1.3457031-3,3-3h4c1.6542969,0,3,1.3457031,3,3    S24.6425781,28,22.9882813,28z M18.9882813,24c-0.5512695,0-1,0.4487305-1,1s0.4487305,1,1,1h4c0.5512695,0,1-0.4487305,1-1    s-0.4487305-1-1-1H18.9882813z"
                  />
                </g>
                <g>
                  <path
                    d="M20,19h-2c0-2.6303711,1.1967773-3.9765625,2.2524414-5.1645508C21.2290039,12.7373047,22,11.8696289,22,10h2    c0,2.6303711-1.1967773,3.9765625-2.2524414,5.1645508C20.7709961,16.2626953,20,17.1303711,20,19z"
                  />
                </g>
                <g>
                  <path
                    d="M31,19h-2c0-2.6303711,1.1967773-3.9765625,2.2524414-5.1645508C32.2290039,12.7373047,33,11.8696289,33,10h2    c0,2.6303711-1.1967773,3.9765625-2.2524414,5.1645508C31.7709961,16.2626953,31,17.1303711,31,19z"
                  />
                </g>
                <g>
                  <path
                    d="M42,19h-2c0-2.6303711,1.1967773-3.9765625,2.2524414-5.1645508C43.2290039,12.7373047,44,11.8696289,44,10h2    c0,2.6303711-1.1967773,3.9765625-2.2524414,5.1645508C42.7709961,16.2626953,42,17.1303711,42,19z"
                  />
                </g>
                <g>
                  <path
                    d="M34,28h-4c-1.6542969,0-3-1.3457031-3-3s1.3457031-3,3-3h4c1.6542969,0,3,1.3457031,3,3S35.6542969,28,34,28z M30,24    c-0.5512695,0-1,0.4487305-1,1s0.4487305,1,1,1h4c0.5512695,0,1-0.4487305,1-1s-0.4487305-1-1-1H30z"
                  />
                </g>
              </g>
            </svg>

            <h3 class="about-video__service-title">Breakfast</h3>
          </li>
          <!-- 5 -->
          <li class="about-video__service">
            <svg
              class="about-video__service-img"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              x="0px"
              y="0px"
              viewBox="0 0 100 125"
              enable-background="new 0 0 100 100"
              xml:space="preserve"
            >
              <g>
                <path
                  d="M71.7050781,65.4951172c0,0.3115234,0.2617188,0.5742188,0.5742188,0.5742188h1.0878906V67.78125h2.2949219v-1.7119141   h9.1484375V67.78125h2.296875v-1.7119141h1.0878906c0.3105469,0,0.5742188-0.2626953,0.5742188-0.5742188v-5.5810547H71.7050781   V65.4951172z M78.8652344,62.2382813h2.7441406c0.6347656,0,1.1484375,0.5136719,1.1484375,1.1484375   c0,0.6337891-0.5136719,1.1474609-1.1484375,1.1474609h-2.7441406c-0.6347656,0-1.1464844-0.5136719-1.1464844-1.1474609   C77.71875,62.7519531,78.2304688,62.2382813,78.8652344,62.2382813z"
                />
                <path
                  d="M88.1953125,51.4609375h-6.8105469v-5.3730469l5.7695313,0.0048828L84.46875,39.0214844   c-0.1972656-0.5146484-0.9550781-1.0371094-1.5058594-1.0371094h-5.4296875c-0.5507813,0-1.3125,0.5244141-1.5097656,1.0380859   l-2.7050781,7.0595703l5.7714844,0.0048828v5.3740234h-6.8105469c-0.3125,0-0.5742188,0.2617188-0.5742188,0.5732422v5.5839844   h17.0644531v-5.5839844C88.7695313,51.7226563,88.5058594,51.4609375,88.1953125,51.4609375z M81.609375,55.2929688h-2.7441406   c-0.6347656,0-1.1464844-0.5136719-1.1464844-1.1484375s0.5117188-1.1484375,1.1464844-1.1484375h2.7441406   c0.6347656,0,1.1484375,0.5136719,1.1484375,1.1484375S82.2441406,55.2929688,81.609375,55.2929688z"
                />
                <path
                  d="M18.4790039,46.8916016c0-5.0820313,4.1362305-9.2167969,9.2182617-9.2167969h5.9331055   c2.0507813,0,4.0219727,0.6943359,5.621582,1.9345703c1.6000977-1.2402344,3.5708008-1.9345703,5.621582-1.9345703h5.9331055   c5.0820313,0,9.2167969,4.1347656,9.2167969,9.2167969v0.6201172h2.1054688V36.7421875   c0-2.4941406-2.0292969-4.5234375-4.5253906-4.5234375H21.065918c-2.4936523,0-4.5229492,2.0292969-4.5229492,4.5234375v10.7695313   h1.9360352V46.8916016z"
                />
                <path
                  d="M63.5917969,51.0117188c-0.2382813-0.0390625-0.4570313-0.0556641-0.6816406-0.0556641H15.7548828   c-0.2231445,0-0.4428711,0.0166016-0.6582031,0.0527344c-2.2143555,0.3320313-3.8657227,2.2519531-3.8657227,4.4697266V64.53125   h3.6806641v3.25h2.2963867v-3.25h44.4521484v3.25h2.2949219v-3.25h3.4804688v-9.0527344   C67.4355469,53.2607422,65.7832031,51.3408203,63.5917969,51.0117188z"
                />
                <path
                  d="M33.6303711,41.1191406h-5.9331055c-3.1826172,0-5.7739258,2.5898438-5.7739258,5.7724609v0.6201172h17.4799805v-0.6201172   c0-1.3964844-0.512207-2.7470703-1.4428711-3.8017578C36.8608398,41.8349609,35.2841797,41.1191406,33.6303711,41.1191406z"
                />
                <path
                  d="M56.5800781,47.5117188v-0.6201172c0-3.1826172-2.5898438-5.7724609-5.7734375-5.7724609h-5.9331055   c-1.2021484,0-2.3598633,0.3818359-3.3266602,1.0693359c0.8457031,1.4140625,1.3007813,3.0371094,1.3007813,4.703125v0.6201172   H56.5800781z"
                />
              </g>
            </svg>
            <h3 class="about-video__service-title">Breakfast</h3>
          </li>
        </ul>

        <article class="about-video__room">
          <img
            class="about-video__room-img"
            src="./assets/images/about-us-page/room.webp"
            alt="room"
          />
          <div class="about-video__room-content">
            <h2 class="about-video__room-subtitle title">Restaurant</h2>
            <h2 class="about-video__room-title old">Get Restaurant Facilities & Many Other More</h2>
            <p class="about-video__room-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip.
            </p>
            <button class="about-video__room-button">Take a Tour</button>
          </div>
        </article>
      </section>

      <section class="features features--dark">
        <h2 class="features__subtitle title">Facilities</h2>
        <h3 class="features__title old">Core Features</h3>

        <div class="features__list">
          <!-- 1 -->
          <article class="feature feature--dark">
            <img class="feature__img" src="./assets/images/features/starts.svg" alt="rating icon" />

            <div class="feature__content">
              <h3 class="feature__title old">Have High Rating</h3>
              <p class="feature__desctiption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna..
              </p>
            </div>
          </article>
          <!-- 2-->
          <article class="feature feature--dark">
            <img
              class="feature__img"
              src="./assets/images/features/clock.svg"
              alt="quiet Hours icon"
            />

            <div class="feature__content">
              <h3 class="feature__title old">Quiet Hours</h3>
              <p class="feature__desctiption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna..
              </p>
            </div>
          </article>
          <!-- 3 -->
          <article class="feature feature--dark">
            <img
              class="feature__img"
              src="./assets/images/features/location.svg"
              alt="best location icon"
            />

            <div class="feature__content">
              <h3 class="feature__title old">Best Locations</h3>
              <p class="feature__desctiption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna..
              </p>
            </div>
          </article>
          <!-- 4-->
          <article class="feature feature--dark">
            <img
              class="feature__img"
              src="./assets/images/features/clock-cross.svg"
              alt="free Cancellation icon"
            />

            <div class="feature__content">
              <h3 class="feature__title old">Free Cancellation</h3>
              <p class="feature__desctiption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna..
              </p>
            </div>
          </article>
          <!-- 5 -->
          <article class="feature feature--dark">
            <img
              class="feature__img"
              src="./assets/images/features/credit.svg"
              alt="payment card icon"
            />

            <div class="feature__content">
              <h3 class="feature__title old">Payment Options</h3>
              <p class="feature__desctiption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna..
              </p>
            </div>
          </article>
          <!-- 6 -->
          <article class="feature feature--dark">
            <img
              class="feature__img"
              src="./assets/images/features/offer.svg"
              alt="Special Offers icon"
            />

            <div class="feature__content">
              <h3 class="feature__title old">Special Offers</h3>
              <p class="feature__desctiption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna..
              </p>
            </div>
          </article>
        </div>
      </section>

      <section class="fun wrapper2">
        <h2 class="fun__subtitle title">Counter</h2>
        <h3 class="fun__title old">Some Fun Facts</h3>

        <ul class="fun__list">
          <li class="fun__list-item">
            <svg
              class="fun__list-img"
              fill="fill"
              version="1.1"
              id="Layer_1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 496 496"
              xml:space="preserve"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <g>
                    <g>
                      <path
                        d="M496,112C496,50.24,445.76,0,384,0H112C50.24,0,0,50.24,0,112s50.24,112,112,112h21.984 C104.56,253.784,88,293.552,88,336c0,88.224,71.776,160,160,160s160-71.776,160-160c0-42.448-16.56-82.216-45.984-112H384 C445.76,224,496,173.76,496,112z M320,460.512C298.792,472.832,274.24,480,248,480s-50.792-7.168-72-19.488V440 c0-39.696,32.296-72,72-72s72,32.304,72,72V460.512z M392,336c0,46.248-22.008,87.36-56,113.728V440c0-48.52-39.48-88-88-88 c-48.52,0-88,39.48-88,88v9.728c-33.992-26.368-56-67.48-56-113.728c0-43.8,19.592-84.448,53.8-112h45.048 C186.496,237.208,176,257.392,176,280c0,39.696,32.296,72,72,72s72-32.304,72-72c0-22.608-10.496-42.792-26.848-56H338.2 C372.408,251.552,392,292.2,392,336z M248,224c30.872,0,56,25.12,56,56s-25.128,56-56,56s-56-25.12-56-56S217.128,224,248,224z M112,208c-52.936,0-96-43.064-96-96s43.064-96,96-96h272c52.936,0,96,43.064,96,96c0,52.936-43.064,96-96,96H112z"
                      ></path>
                      <path
                        d="M392,149.88l44.528,23.416l-8.504-49.592l36.04-35.12l-49.8-7.232L392,36.232l-22.264,45.12L320,88.576l-49.736-7.224 L248,36.232l-22.264,45.12L176,88.576l-49.736-7.224L104,36.232l-22.264,45.12l-49.8,7.232l36.04,35.12l-8.504,49.592L104,149.88 l44.528,23.416l-8.504-49.592L176,88.648l35.976,35.064l-8.504,49.592L248,149.88l44.528,23.416l-8.504-49.592L320,88.648 l35.976,35.064l-8.504,49.592L392,149.88z M122.832,118.12l4.448,25.928L104,131.808l-23.28,12.24l4.448-25.928l-18.84-18.36 l26.032-3.784L104,72.392l11.64,23.584l26.032,3.784L122.832,118.12z M266.84,118.12l4.448,25.928L248,131.808l-23.28,12.24 l4.448-25.928l-18.84-18.36l26.032-3.784L248,72.392l11.64,23.584l26.032,3.784L266.84,118.12z M354.336,99.76l26.024-3.784 L392,72.392l11.64,23.584l26.032,3.784l-18.832,18.36l4.448,25.928L392,131.808l-23.28,12.24l4.448-25.928L354.336,99.76z"
                      ></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
            <h3 class="fun__list-title old">
              10M <span class="fun__list-span">Reviews & Appriciate</span>
            </h3>
            <svg
              class="fun__list-arrow"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"
              />
            </svg>
          </li>
          <li class="fun__list-item">
            <svg
              class="fun__list-img"
              version="1.1"
              id="_x32_"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 512 512"
              xml:space="preserve"
              fill="fill"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <path
                    class="st0"
                    d="M507.532,223.313c-9.891-24.594-35-41.125-62.469-41.125H365.86c-2.516,0-4.75-0.031-6.75-0.094 c0.641-0.844,1.203-1.594,1.672-2.203c2.719-3.563,4.922-6.406,6.656-9.188c0.688-0.922,1.688-2.047,2.859-3.453 c9.516-11.234,29.328-34.625,34.531-67.109c2.891-18.016-2.359-36.438-14.359-50.516c-11.156-13.094-26.906-20.891-42.109-20.891 c-15.359,0-28.672,7.641-36.516,20.969c-1.156,1.938-2.531,4.406-4.125,7.266c-7.797,13.859-24,42.719-39.672,54.063 c-17.969,12.984-33.875,30.5-49.25,47.453c-21.141,23.313-43.016,47.406-60.656,47.406c-13.797,0-24.969,11.203-24.969,24.984 v170.516c0,13.797,11.172,24.984,24.969,24.984c18.359,0,59.766,15.938,89.984,27.594c23.156,8.922,43.172,16.609,56.703,19.328 c3.984,0.797,8.094,1.719,12.313,2.641c15.484,3.438,33.063,7.328,50.531,7.328c27.766,0,49.234-10.031,63.797-29.828 c14.203-19.266,30.422-69.313,51.813-137.938c1.453-4.703,2.906-9.328,4.297-13.797 C520.017,267.188,512.501,235.641,507.532,223.313z M465.563,288.453c-17.031,54.172-39.719,130.516-54.219,150.188 c-11.031,15-26.672,19.641-43.672,19.641c-19.141,0-40-5.875-57.938-9.484c-29.891-5.984-114.328-47.406-151.594-47.406V230.875 c45.234,0,81.125-68.25,124.531-99.594c23.391-16.922,42.984-55.797,50.688-68.906c3.547-6.031,9.016-8.672,15-8.672 c15.984,0,35.578,18.844,31.797,42.484c-5.203,32.484-29.891,54.594-33.797,61.078c-3.891,6.516-20.797,24.703-20.797,35.094 c0,9.109,6.484,14.813,40.297,14.813c42.031,0,70.922,0,79.203,0C478.923,207.172,508.767,246.969,465.563,288.453z"
                  ></path>
                  <path
                    class="st0"
                    d="M0.001,250.734v158.219c0,19.547,15.844,35.406,35.406,35.406h42.234c13.047,0,23.609-10.578,23.609-23.609 V215.328H35.407C15.845,215.328,0.001,231.172,0.001,250.734z M49.798,374.125c8.969,0,16.25,7.266,16.25,16.25 c0,8.969-7.281,16.25-16.25,16.25c-8.984,0-16.266-7.281-16.266-16.25C33.532,381.391,40.813,374.125,49.798,374.125z"
                  ></path>
                </g>
              </g>
            </svg>
            <h3 class="fun__list-title old">
              8000 <span class="fun__list-span">Happy Users</span>
            </h3>
            <svg
              class="fun__list-arrow"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"
              />
            </svg>
          </li>
          <li class="fun__list-item">
            <svg
              class="fun__list-img"
              fill="fill"
              version="1.2"
              baseProfile="tiny"
              id="earth"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="-63 65 128 128"
              xml:space="preserve"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke="#CCCCCC"
                stroke-width="0.256"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  id="Layer_1_1_"
                  d="M4.8,189.6c33.5-2,59-30.9,56.8-64.4c-2-33.5-30.9-59-64.4-56.8c-33.5,2-59,30.9-56.8,64.4 C-57.6,166.2-28.7,191.6,4.8,189.6z M-12.6,116.5c-1.7-3.3,3.1-5.1,5.6-7.6c3.1-3.3,9.8-8.7,9-10.7C1.2,96-5.6,90-9.3,91.4 c-0.8,0-5.1,4.8-6.1,5.6c0-1.7-0.3-2.6-0.3-4.2c0-1.1-2.2-2-2-2.8c0.2-1.9,4.8-5.4,5.9-6.8c-0.9-0.6-4-2.8-4.8-2.5 c-2,1.1-4.5,1.9-6.7,2.8c0-0.8-0.2-1.6-0.3-2c4.2-2.2,8.7-3.7,13.4-4.8l4.2,1.6l3.1,3.3l3.1,2.9c0,0,1.9,0.8,2.6,0.8 c0.9-0.2,3.9-4,3.9-4l-1.2-2.9l-0.2-2.6c8.4,0.8,16.1,3.3,23.1,7.6c-1.1,0.2-2.6,0.3-4,0.8c-0.6-0.3-3.9,0.3-3.7,1.7 c0.2,1.1,5.9,5.7,8.4,9.8c2.5,4.2,9.5,6.8,10.7,11.5c1.2,5.4-0.8,12.4,0.2,18.9c0.9,6.4,7.9,13,7.9,13s3.1,0.9,5.6,0.3 c-1.9,9.5-6.1,18.2-12.6,25.6c-7.3,8.2-16.5,14-26.9,16.5c1.2-3.7,3.7-7.3,6.1-9.3c2-1.9,4.5-5.1,5.4-7.6c0.9-2.6,2.2-4.8,3.7-7.3 c1.9-3.3-5.7-7.9-8.2-8.7c-5.6-2-9.8-4.8-14.6-7.9c-3.6-2.2-14.3,2.8-18.3,1.2c-5.4-2-7.3-3.7-12.1-6.8c-5-3.3-3.6-10.2-3.9-15.4 c3.7,0,8.8-1.6,11.5,1.2c0.8,0.9,3.7,4.8,5.4,3.3C-9.2,122.3-12,117.6-12.6,116.5z M-42.4,97.4c0.3,2.6,1.7,4.7,1.7,6.5 c0,7.3-0.6,11.6,4,17.4c1.9,2.2,2.5,5.6,3.3,8.4c0.9,2.6,4,3.9,6.4,5.4c4.5,2.9,8.8,6.7,13.7,9.3c3.1,1.7,5,2.6,4.5,6.4 c-0.6,2.9-0.6,4.8-2,7.6c-0.3,0.9,2.2,5.9,2.9,6.5c2.5,2,4.8,4,7.5,5.9c4,2.9,0,7.3-1.6,11.8c-11.8-0.8-23.1-5.4-32.3-13.4 c-10.7-9.5-17.1-22.7-18-36.8C-53.3,119.5-50.2,107.5-42.4,97.4z"
                ></path>
              </g>
            </svg>
            <h3 class="fun__list-title old">
              100 <span class="fun__list-span">Country Coverage</span>
            </h3>
            <svg
              class="fun__list-arrow"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"
              />
            </svg>
          </li>
        </ul>

        <!-- TODO:SLIDER -->
        <ul class="fun__images">
          <li class="fun__images-item">
            <img
              class="fun__images-img"
              src="./assets/images/about-us-page/room.webp"
              loading="lazy"
              alt="room image"
            />
          </li>
          <li class="fun__images-item">
            <img
              class="fun__images-img"
              src="./assets/images/about-us-page/room.webp"
              loading="lazy"
              alt="room image"
            />
          </li>
        </ul>
      </section>

@endsection